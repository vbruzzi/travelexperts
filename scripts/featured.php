<?php
    class Card {
        private $title;
        private $featured;
        private $price;
        public function __construct($t, $f, $p) {
            $this->title = $t;
            $this->featured = $f;
            $this->price = $p;
        }


        public function makeCard($id){
            echo "<div class=\"col-auto mb-3\">
            <div class=\"card border-0\">
                <a href=\"#\">
                    <div class=\"card-body rounded featured".$id." d-flex flex-column\">
                        <h5 class=\"card-title\">".$this->title."</h5>
                    <ul class=\"card-text\">";
            foreach($this->featured as $feature){
                echo "<li>".$feature[0]."</li>";
            }
            echo 
                        "</ul>
                        <a href=\"#\" class=\"mt-auto btn btn-light outline\">Get it now for $".$this->price."</a>
                    </div>
                </a>

            </div>                    
            </div>
            ";
        }
    }
?>