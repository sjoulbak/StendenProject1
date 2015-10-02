<?php
/**
 * Created by PhpStorm.
 * User: alwin_000
 * Date: 2-10-2015
 * Time: 13:09
 */


// Hulp voor de feed
class feedVariables{
    public $title;
    public $link;
    public $description;
}
class Feed{
    private $url;
    private $xmlDoc;

    // Laad de feed in
    public function __construct($url){
        $this->url = ($url);
        $this->xmlDoc = new DOMDocument();
        $this->xmlDoc->load($this->url);
    }


    // Channel verwerken
    public function getChannel(){


        $variables = new feedVariables();
        $channel=$this->xmlDoc->getElementsByTagName('channel')->item(0);
        $variables->title = $channel->getElementsByTagName('title')
            ->item(0)->childNodes->item(0)->nodeValue;
        $variables->link = $channel->getElementsByTagName('link')
            ->item(0)->childNodes->item(0)->nodeValue;
        $variables->description = $channel->getElementsByTagName('description')
            ->item(0)->childNodes->item(0)->nodeValue;


        return $variables;
    }
    // Items verwerken
    public function getItems(){
        $x = $this->xmlDoc->getElementsByTagName('item');
        $feedItems = [];
        for ($i=0; $i<=2; $i++) {
            $itemVariables = new feedVariables();
            $itemVariables->title = $x->item($i)->getElementsByTagName('title')
                ->item(0)->childNodes->item(0)->nodeValue;
            $itemVariables->link = $x->item($i)->getElementsByTagName('link')
                ->item(0)->childNodes->item(0)->nodeValue;
            $itemVariables->description = $x->item($i)->getElementsByTagName('description')
                ->item(0)->childNodes->item(0)->nodeValue;

            $feedItems[] = $itemVariables;
        }
        return $feedItems;
    }

}