
<?php
class Page
{
    public $content;
    public $title="TLA Consulting Pty Ltd";
    public $keywords='TLA Consulting,Three Letter Abbreviation,some of my best friend are search engines';
    public $buttons=array('Home'=>'home.php',
                        'Contact'=>'contact.php',
                        'Services'=>'services.php',
                        'Site Map'=>'map.php'
        );

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->$name=$value;
    }

    public function Display()
    {
        echo "<html>\n<head>\n";
        $this->DisplayTitle();
        $this->DisplayKeywords();
        $this->DisplayStyles();
        echo "</head>\n<body>\n";
        $this->DisplayHeader();
        $this->DisplayMenu($this->buttons);
        echo $this->content;
        $this->DisplayFooter();
        echo "</body>\n</html>\n";
    }

    public function DisplayTitle()
    {
        echo "<title>".$this->title.'</title>';
    }

    public function DisplayKeywords()
    {
        echo "<meta name=\"keywords\" content=\"".$this->keywords."\">";
    }

    public function DisplayStyles()
    {
        ?>
         <style>
             h1{color: white;font-size: 24pt;text-align: center;font-family: arial,sans-serif}
             .menu{color: white;font-size: 12pt;text-align: center;font-family: Arial,sans-serif;font-weight: bold}
             td{background: black}
             p{color: black;font-size: 12pt;text-align: justify;font-family: Arial,sans-serif;}
             p.foot{color:white;font-size:9pt;text-align: center;font-family: Arial,sans-serif;font-weight: bold}
             a.link,a:visited,a:active{color: white}
         </style>
   <?php
    }

    public function DisplayHeader()
    {
        ?>
            <table width="100%" cellpadding="12" cellspacing="0" border="0">
                <tr bgcolor="black">
                    <td align="left">cesi</td>
                    <td>
                        <h1>Tla consulting</h1>
                    </td>
                    <td>logo.gif</td>
                </tr>
            </table>
    <?php
    }

    public function DisplayMenu($buttons)
    {
        echo "<table width=\"100%\" bgcolor=\"white\" cellpadding=\"4\" cellspacing=\"4\">\n";
        echo "<tr>\n";
        $width=100/count($buttons);
        while (list($name,$url)=each($buttons))
        {
            $this->DisplayButton($width,$name,$url,!$this->isURLCurrentPage($url));
        }
        echo "</tr>\n";
        echo "</table>\n";
    }

    public function IsURLCurrentPage($url)
    {
        if(strpos($_SERVER['PHP_SELF'],$url)==false){
            return false;
        }else{
            return true;
        }
    }

    public function DisplayButton($width,$name,$url,$active=true)
    {
        if($active){
            echo "<td width=\"".$width."%\">
            <a href=\"".$url."\">
            <img src=\"s-lgog\" alt=\"".$name."\" border=\"0\"/></a>
            <a href=\"".$url."\"> </a>
            </td>";
        }else{
            echo "<td width=\"".$width."%\">
            <img src=\"side-logo.gif\">
            <span class=\"menu\">".$name."</span>
            </td>";
        }
    }

    public function Displayfooter()
    {
        ?>
            <table width="100%" bgcolor="black" cellpadding="12" cellspacing="0">
                <tr>
                    <td>
                        <p class="foot">&copy;TLA Consulting Pty Ltd.</p>
                        <p class="foot">&copy;Please see our <a href="legal.php">legal information page</a></p>
                    </td>
                </tr>
            </table>
        <?php
    }
}