<?php
    class Card {
        private $title;
        private $featured;
        private $price;
        private $id;
        public function __construct($t, $f, $p, $id) {
            $this->title = $t;
            $this->featured = $f;
            $this->price = $p;
            $this->id = $id;
        }


        public function makeCard($id){
            echo "<div class=\"col-auto mb-3\">
            <div class=\"card border-0\">
                    <div class=\"card-body rounded featured".$id." d-flex flex-column\">
                        <h5 class=\"card-title\">".$this->title."</h5>
                    <ul class=\"card-text\">";
            foreach($this->featured as $feature){
                echo "<li>".$feature[0]."</li>";
            }
            echo 
                        "</ul>
                        <a href=\"order.php?order=".$this->id."\" class=\"mt-auto btn btn-light outline\">Get it now for $".$this->price."</a>
                    </div>

            </div>                    
            </div>
            ";
        }
    }
?>