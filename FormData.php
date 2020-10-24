<?php 

class FormData
{
    public $Fname;
    public $Lname;
    public $DOB;
    public $Time;
    public $Gender;
    public $TInsurance;
    public $HouseNo;
    public $PostCode;
    public $MobileNo;
    public $LandLine;
    public $RandomNo;
    public $RandomNo2;
    public $RandomNo3;

    function SetData($postData) 

    { 
    var_dump($postData);
    $this->Fname = $postData['Fname'];
    $this->Lname = $postData['LName'];
    $this->DOB = $postData['DOB'];
    $this->Time = $postData['Time'];
    $this->Gender = $postData['Gender'];
    $this->TInsurance = $postData['insurance'];
    $this->HouseNo = $postData['HouseNo'];
    $this->PostCode = $postData['PostNo'];
    $this->MobileNo = $postData['MobileNumber'];
    $this->LandLine = $postData['LandLine'];
    $this->RandomNo = $postData['R1'];
    $this->RandomNo2 = $postData['R2'];
    $this->RandomNo3 = $postData['R3'];
    }

    function PageOneValid() 
    {
        return $this->Fname !==null && $this->Time !==null && $this->DOB !==null && $this->Lname !== null;
    }
} 


// }

// $this->Fname = $Fname;

?>
