<?php
namespace PingYo;

class ApplicationDetails
{

    public $title;
    public $firstname;
    public $lastname;
    public $dateofbirth;
    public $email;
    public $homephonenumber;
    public $mobilephonenumber;
    public $workphonenumber;

    public $employername;
    public $jobtitle;
    public $employmentstarted;
    public $employerindustry;
    public $incomesource;
    public $payfrequency;
    public $payamount;
    public $incomepaymenttype;
    public $nextpaydate;
    public $followingpaydate;
    public $loanamount;
    public $term;
    public $nationalidentitynumber;
    //public $nationalidentitynumbertype;
    public $consenttocreditsearch;
    public $consenttomarketingemails;
    public $residentialstatus;

    public $housenumber;
    public $housename;
    public $addressstreet1;
    public $addresscity;
    public $addressstate;
    //public $addresscountrycode;
    public $addresscounty;
    public $addressmovein;
    public $addresspostcode;

    public $bankaccountnumber;
    public $bankcardtype;
    public $bankname;
    public $bankroutingnumber;
    public $bankinstitutionid;    
    public $monthlymortgagerent;
    public $monthlycreditcommitments;
    public $otherexpenses;
    public $transport;
    public $food;
    public $utilities;
    public $confirmedbyapplicant;
    public $maritalstatus;
    public $militaryservice;
    public $loanproceeduse;
    public $numberofdependents;
    public $combinedmonthlyhouseholdincome;
    public $minimumcommissionamount;
    public $maximumcommissionamount;
    public $applicationextensions;
    
    private $logger = null;

    private $consenttocreditsearch_variants = [false, true];

    public function attachLogger(\Psr\Log\LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    public function toJson()
    {
        if (!is_null($this->logger)) {
            $this->logger->debug("ApplicationDetails::toJson() called");
        }
        $r = $this->validate();
        if ($r === true) {
            return json_encode($this->toArray());
        }
    }

    public function validate()
    {
        if (!is_null($this->logger)) {
            $this->logger->debug("ApplicationDetails::validate() called");
        }
        $validator = new ExtendedValidator(array(
            'title' => $this->title,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'dateofbirth' => $this->dateofbirth,
            'email' => $this->email,
            'homephonenumber' => $this->homephonenumber,
            'mobilephonenumber' => $this->mobilephonenumber,
            'workphonenumber' => $this->workphonenumber,
            'employername' => $this->employername,
            //'jobtitle' => $this->jobtitle,
            'employmentstarted' => $this->employmentstarted,
            //'employerindustry' => $this->employerindustry,
            'incomesource' => $this->incomesource,
            'payfrequency' => $this->payfrequency,
            'payamount' => $this->payamount,
            'incomepaymenttype' => $this->incomepaymenttype,
            'nextpaydate' => $this->nextpaydate,
            'followingpaydate' => $this->followingpaydate,
            'loanamount' => $this->loanamount,
            //'term' => $this->term,
            //'nationalidentitynumber' => $this->nationalidentitynumber,
            //'nationalidentitynumbertype' => $this->nationalidentitynumbertype,
            'consenttocreditsearch' => $this->consenttocreditsearch,
            'consenttomarketingemails' => $this->consenttomarketingemails,
            'residentialstatus' => $this->residentialstatus,
            //'housenumber' => $this->housenumber,
            //'housename' => $this->housename,
            'addressstreet1' => $this->addressstreet1,
            'addresscity' => $this->addresscity,
            //'addressstate' => $this->addressstate,
            //'addresscountrycode' => $this->addresscountrycode,
            //'addresscounty' => $this->addresscounty,
            'addressmovein' => $this->addressmovein,
            'addresspostcode' => $this->addresspostcode,
            //'bankname' => $this->bankname,
            'bankaccountnumber' => $this->bankaccountnumber,
            'bankcardtype' => $this->bankcardtype,
            'bankroutingnumber' => $this->bankroutingnumber,
            //'bankinstitutionid' => $this->bankinstitutionid,
            //'monthlymortgagerent' => $this->monthlymortgagerent,
            //'monthlycreditcommitments' => $this->monthlycreditcommitments,
            //'otherexpenses' => $this->otherexpenses,
            //'transport' => $this->transport,
            //'food' => $this->food,
            //'utilities' => $this->utilities,
            //'confirmedbyapplicant' => $this->confirmedbyapplicant,
            //'maritalstatus' => $this->maritalstatus,
            //'loanproceeduse' => $this->loanproceeduse,
            //'numberofdependents' => $this->numberofdependents,
            //'combinedmonthlyhouseholdincome' => $this->combinedmonthlyhouseholdincome,
            //'minimumcommissionamount' => $this->minimumcommissionamount,
            //'maximumcommissionamount' => $this->maximumcommissionamount,
            //'applicationextensions' => $this->applicationextensions
        ));
        $validator->rules($this->getValidationRules());
        if ($validator->validate()) {
            if (!is_null($this->logger)) {
                $this->logger->info("ApplicationDetails validation passed");
            }
            return true;
        } else {
            if (!is_null($this->logger)) {
                $this->logger->warning("ApplicationDetails validation errors found: ",
                    array('errors' => $validator->errors()));
            }
            return $validator->errors();
        }
    }

    private function getValidationRules()
    {
        if (!is_null($this->logger)) {
            $this->logger->debug("ApplicationDetails::getValidationRules() called");
        }
        return [
            'required' => [
                [
                    [
                        'title',
                        'firstname',
                        'lastname',
                        'dateofbirth',
                        'email',
                        'homephonenumber',
                        'mobilephonenumber',
                        'workphonenumber',
                        'employername',
                        //'jobtitle',
                        'employmentstarted',
                        //'employerindustry',
                        'incomesource',
                        'payfrequency',
                        'payamount',
                        'incomepaymenttype',
                        'nextpaydate',
                        'followingpaydate',
                        'loanamount',
                        'consenttocreditsearch',
                        'consenttomarketingemails',
                        'residentialstatus',
                        'addressstreet1',
                        'addresscity',
                        //'addresscountrycode',
                        //'addresscounty',
                        'addressmovein',
                        'addresspostcode',
                        'bankaccountnumber',
                        'bankcardtype',
                        'bankroutingnumber',
                        //'monthlymortgagerent',
                        //'monthlycreditcommitments',
                        //'otherexpenses'
                    ]
                ]
            ],
            //'required_with' => [
            //    [['nationalidentitynumbertype'], 'nationalidentitynumber']
            //],
            //'required_without' => [
            //    [['housenumber'], 'housename'],
            //    [['housename'], 'housenumber']
            //],
            //'required_if' => [
            //    [['nationalidentitynumber'], ['bankcardtype', ['None', 'Unknown']]]
            //],
            'email' => [
                [['email']]
            ],
            'phone' => [
                [['homephonenumber', 'mobilephonenumber', 'workphonenumber'], 'addresscountrycode']
            ],
            'lengthMin' => [
                [['firstname', 'lastname'], 2],
                [['employername'], 2]
            ],
            'alpha' => [
                [['firstname', 'lastname']]
            ],
            'date' => [
                [['dateofbirth', 'employmentstarted', 'nextpaydate', 'followingpaydate', 'addressmovein']]
            ],
            'dateAfter' => [
                [['nextpaydate', 'followingpaydate'], $this->getTodayDate()],
            ],
            'dateBefore' => [
                [['nextpaydate', 'followingpaydate'], $this->getValidPAYDATE()],
                [['dateofbirth'], $this->getValidDOB()]
            ],
            'in' => [
                [['title'], TitleTypes::validation_set()],
                //[['employerindustry'], EmployerIndustryTypes::validation_set()],
                [['incomesource'], IncomeSourceTypes::validation_set()],
                [['payfrequency'], PayFrequencyTypes::validation_set()],
                [['incomepaymenttype'], IncomePaymentTypes::validation_set()],
                //[['nationalidentitynumbertype'], NationalIdentityNumberTypes::validation_set()],
                [['residentialstatus'], ResidentialStatusTypes::validation_set()],
                [['consenttocreditsearch', 'consenttomarketingemails'], $this->consenttocreditsearch_variants],
                [['bankcardtype'], BankCardTypes::validation_set()],
                //[['maritalstatus'], MaritalStatusTypes::validation_set()],
                //[['loanproceeduse'], LoanProceedUseTypes::validation_set()],
                //[['militaryservice'], MilitaryServiceTypes::validation_set()],
            ],
            'integer' => [
                [['payamount,loanamount']]
            ],
            'min' => [
                [['loanamount'], 100],
                [['payamount'], 100],
            ],
            'max' => [
                [['loanamount'], 2000],
                [['payamount'], 15000]
            ],
            //'numeric' => [
            //    [
            //        [
            //            'monthlymortgagerent',
            //            'monthlycreditcommitments',
            //            'otherexpenses',
            //            'minimumcommissionamount',
            //            'maximumcommissionamount'
            //        ]
            //    ]
            //]
        ];
    }

    private function getTodayDate()
    {
        if (!is_null($this->logger)) {
            $this->logger->debug("ApplicationDetails::getTodayDate() called");
        }
        $date = new \DateTime("now", new \DateTimeZone("UTC"));
        return $date;
    }

    private function getValidPAYDATE()
    {
        if (!is_null($this->logger)) {
            $this->logger->debug("ApplicationDetails::getValidPAYDATE() called");
        }
        $date = new \DateTime("now", new \DateTimeZone("UTC"));
        $date->add(date_interval_create_from_date_string('45 days'));
        return $date;
    }

    private function getValidDOB()
    {
        if (!is_null($this->logger)) {
            $this->logger->debug("ApplicationDetails::getValidDOB() called");
        }
        $date = new \DateTime("now", new \DateTimeZone("UTC"));
        $date->sub(date_interval_create_from_date_string('18 years'));
        return $date;
    }

    public function toArray()
    {
        if (!is_null($this->logger)) {
            $this->logger->debug("ApplicationDetails::toArray() called");
        }
        $r = $this->validate();
        if ($r === true) {
            return [
                'Title' => $this->title,
                'FirstName' => $this->firstname,
                'LastName' => $this->lastname,
                'DateOfBirth' => $this->strDateToJsonDate($this->dateofbirth),
                'Email' => $this->email,
                'HomePhoneNumber' => $this->NormalizePhone($this->homephonenumber, $this->addresscountrycode),
                'MobilePhoneNumber' => $this->NormalizePhone($this->mobilephonenumber, $this->addresscountrycode),
                'WorkPhoneNumber' => $this->NormalizePhone($this->workphonenumber, $this->addresscountrycode),
                'EmployerName' => $this->employername,
                'JobTitle' => $this->jobtitle,
                'EmploymentStarted' => $this->strDateToJsonDate($this->employmentstarted),
                'EmployerIndustry' => $this->employerindustry,
                'IncomeSource' => $this->incomesource,
                'PayFrequency' => $this->payfrequency,
                'PayAmount' => $this->payamount,
                'IncomePaymentType' => $this->incomepaymenttype,
                'NextPayDate' => $this->strDateToJsonDate($this->nextpaydate),
                'FollowingPayDate' => $this->strDateToJsonDate($this->followingpaydate),
                'LoanAmount' => $this->loanamount,
                'Term' => $this->term,
                'NationalIdentityNumber' => $this->nationalidentitynumber,
                //'NationalIdentityNumberType' => $this->nationalidentitynumbertype,
                'ConsentToCreditSearch' => $this->consenttocreditsearch,
                'ConsentToMarketingEmails' => $this->consenttomarketingemails,
                'ResidentialStatus' => $this->residentialstatus,
                'HouseNumber' => $this->housenumber,
                'HouseName' => $this->housename,
                'AddressStreet1' => $this->addressstreet1,
                'AddressCity' => $this->addresscity,
                'AddressState' => $this->addressstate,
                //'AddressCountryCode' => $this->addresscountrycode,
                'AddressCounty' => $this->addresscounty,
                'AddressMoveIn' => $this->strDateToJsonDate($this->addressmovein),
                'AddressPostcode' => $this->addresspostcode,
                'BankName' => $this->bankname,
                'BankAccountNumber' => $this->bankaccountnumber,
                'BankCardType' => $this->bankcardtype,
                'BankRoutingNumber' => $this->bankroutingnumber,
                'BankInstitutionId' => $this->bankinstitutionid,
                'MonthlyMortgageRent' => $this->monthlymortgagerent,
                'MonthlyCreditCommitments' => $this->monthlycreditcommitments,
                'OtherExpenses' => $this->otherexpenses,
                'Transport' => $this->transport,
                'Food' => $this->food,
                'Utilities' => $this->utilities,
                'ConfirmedByApplicant' => $this->confirmedbyapplicant,
                'MaritalStatus' => $this->maritalstatus,
                'LoanProceedUse' => $this->loanproceeduse,
                'NumberOfDependents' => $this->numberofdependents,
                'MilitaryService' => $this->militaryservice,
                'CombinedMonthlyHouseholdIncome' => $this->combinedmonthlyhouseholdincome,
                'MinimumCommissionAmount' => $this->minimumcommissionamount,
                'MaximumCommissionAmount' => $this->maximumcommissionamount,
                'ApplicationExtensions' => $this->applicationextensions
                //"LoanAmountCurrencyCode" => null,
                //"PayAmountCurrencyCode" => null
            ];
        }
    }

    private function strDateToJsonDate($strdate)
    {
        if (!is_null($this->logger)) {
            $this->logger->debug("ApplicationDetails::strDateToJsonDate() called with strdate=$strdate");
        }
        $date = new \DateTime($strdate, new \DateTimeZone("UTC"));
        return '/Date(' . ($date->getTimestamp() * 1000) . ')/';
    }

    private function NormalizePhone($phone, $country)
    {
        if (!is_null($this->logger)) {
            $this->logger->debug("ApplicationDetails::NormalizePhone() called with phone=$phone and country=$country");
        }
        $phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
        $swissNumberProto = $phoneUtil->parse($phone, $country);
        //PhoneNumberFormat::NATIONAL or PhoneNumberFormat::INTERNATIONAL
        return $phoneUtil->format($swissNumberProto, \libphonenumber\PhoneNumberFormat::NATIONAL);
    }

}