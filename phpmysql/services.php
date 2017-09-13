
<?php
    require ('page.inc');
    class ServicesPage extends Page
    {
        private $row2buttons=array(
            'Re-engineering'=>'Reengineering.php',
            'Standards Compliance'=>'standards.php',
            'Buzzword statements'=>'mission.php'
        );
        public function Display()
        {
            echo "<html>\n<head>\n";
            $this->DisplayTitle();
            $this->DisplayKeywords();
            $this->DisplayStyles();
            echo "</head>\n<body>\n";
            $this->DisplayHeader();
            $this->DisplayMenu($this->buttons);
            $this->DisplayMenu($this->row2buttons);
            echo $this->content;
            $this->DisplayFooter();
            echo "</body>\n</html>\n";
        }
    }

    $services=new ServicesPage();

    $services->content="<p> At TLA Consulting,we offer a number of serivces,Perhaps the productivity of you 
    employees wouldimprove if we re-engineered your business.Maybe all your business needs is a fresh mission
    statement,or a new batch of buzzwords.</p>";

    $services->Display();