<?php 


class Rendering
{
    public $pageId;

    public function __construct($num = 0)
    {
        $this->pageId = $num;
    }
    
    public function getPageId() 
    {
        return $this->pageId;
    }

    public function setPageId($num) 
    {
       $this->pageId =$num;
    }


    public function section1()
    {
        $contents = <<<EOD
        <form class="Form" method="post">
        <input name="Fname" placeholder="First Name">
        <input name="LName" placeholder="Last Name">
        <input type="number" name="DOB" placeholder="Date Of Birth">
        <input type="number" name="Time" placeholder="Time">
        <span class="span">
        <button class="reset">Reset</button>
        <input type="hidden" value="true" name="submitted" />
        <button class="next" name="navigate" type="submit">Next</button>
        </span>
        </form>
EOD;

        return $contents;
        
    }


    public function section2()
    {
        $contents = <<<EOD
        <form class="Form" method="post">
        
        <select class="select" id="TInsurance" name="TInsurance">
        <option name="insurance[]" value="Type">Type of Insurance</option>
        <option name="insurance[]" value="MInsurance"">Motor Trade Insurance</option>
        <option name="insurance[]" value="YInsurance">Young Person Insurance </option>
        <option name="insurance[]" value="CInsurance">Convicted Insurance</option>
       </select>

   

        <input name="HouseNo" name="HouseNo" placeholder="House Number"> 
        <input name="PostNo" placeholder="Postcode">
        <span class="span">
        <button class="reset">Reset</button>
        <button class="next" name="navigate" type="submit">Next</button>
        </span>
        </form>
EOD;

        return $contents;
    }

    public function section3()
    {
        $contents = <<<EOD
        <form class="Form" method="post">
        <input name="MobileNumber" placeholder="Mobile Number">
        <input name="LandLine" placeholder="Land Line">
        <section class="GenderAssign">
      Gender  Male:<input type="checkbox" name="Gender[] value="Male"">
        Female:<input type="checkbox" name="Gender[] value="Female"">
        </section>
        <input type=number name="R1" placeholder="Random Number 1">
        <input type=number name="R2" placeholder="Random Number 2"> 
        <input type=number name="R3" placeholder="Random Number 3">
        <span class="span">
        <button class="reset">Reset</button>
        <button class="next" name="navigate" type="Submit Form">Next</button>
        </span>
        </form>
EOD;
        return $contents;
    }

    public function section4($SummaryofData)
        
    {
     var_dump($SummaryofData);
        $contents = <<<EOD
        <form class="Form" method="post">
        <h1><?php> Summary Of Details  </h1>
        Your Name: <p> $SummaryofData->Fname</p> 
        LastName <p>$$SummaryofData->LName1</p>
        Your DOB: <p>$$SummaryofData->DOB1</p>
        Time: <p>$$SummaryofData->Time1</p>
        Type of Insurance: <p>$$SummaryofData->TInsurance1</p>
        House Number: <p>$$SummaryofData->HouseNo1</p>
        PostCode: <p>$$SummaryofData->PostCode1</p>
        Mobile Number: <p>$$SummaryofData->MobileNo1</p>
        LandLine Number <p>$$SummaryofData->LandLine1</p>
        Gender: <p>$$SummaryofData->Gender1</p>
        Random Number 1: <p>$$SummaryofData->RandomNo1</p>
        Random Number 2: <p>$$SummaryofData->RandomNo2</p>
        Random Number 3: <p>$$SummaryofData->RandomNo3</p>

        
        
        </form>
EOD;
    

        return $contents;
     
    }


    public function render($SummaryofData) 
    {
        switch ($this->getPageId()) {
        default:
            return $this->section1();
    

        case 4:
            return $this->section2();
         
        case 8:
                return $this->section3();
        case 10:
            return $this->section4($SummaryofData);
    
        }   
    }
}
 
?>


