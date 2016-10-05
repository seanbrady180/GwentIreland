		<?php
        
            if(file_exists('cards.xml')) {
                    $cName = $_POST["cName"];
                    $cAtkRating = $_POST["cAtkRating"];
                    $cTypeAtk = $_POST["cTypeAtk"];
                    $cSpecial = $_POST["cSpecial"];
                    $cHero = $_POST["cHero"];
                    $cDeck = $_POST["cDeck"];
                // loads XML and returns SimpleXML
                $xml = simplexml_load_file('cards.xml');
                
                //transforming the file in xml format
                $xmlFormat = $xml->asXML();
                //display element in proper format
                echo '<u><b>This is the xml code from cards.xml:</b></u>
                <br /><br />
                <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre><br /><br />';
                
                //adding new child to XML
                $newChild = $xml->addChild('CARD');
                $newChild -> addChild('NAME', $cName);
                $newChild -> addChild('RATE', $cAtkRating);
                $newChild -> addChild('ATTACK', $cTypeAtk);
                $newChild -> addChild('SPECIAL', $cSpecial);
                $newChild -> addChild('TYPE', $cHero);
                $newChild -> addChild('DECK', $cDeck);
                
                //transfering the object in XML format
                $xmlFormat = $xml->asXML();
                //display the element in proper format
                echo '<u><b>This is the xml code from rss.xml with new elements added:</b></u>
                <br /><br />
                <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre>';
            } else{
                exit('Failed to open cards.xml');
            }
                file_put_contents('cards.xml', $xml ->asXML() );
                
                writeRSS();
                function writeRSS(){
                    if(file_exists('rss.xml')){
                    $name = $_POST["cName"];
                    $rate = $_POST["cAtkRating"];
                    $attack = $_POST["cTypeAtk"];
                    $special = $_POST["cSpecial"];
                    $type = $_POST["cHero"];
                    $deck = $_POST["cDeck"];
                    $desc =$name;
                    // load XML in simple XML form
                    
                    $rssxml = simplexml_load_file('rss.xml');
                    $newChild = $rssxml->channel->addChild('item');
                    $newChild->addChild('title', "New Card added! - ");
                    $newChild->addChild('link', "https://gwentireland-seanbrady1.c9users.io - ");
                    $newChild->addChild('description', $desc);
                    file_put_contents('rss.xml', $rssxml->asXML());
                
                    }
                }
                
                
            // moodle.com files provided by Frances Sheridan under Project resources and then modified
           
              ?>