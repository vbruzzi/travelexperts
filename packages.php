<!-- Packages page by Dina -->
<?php require "scripts/header.php" ?>

<!-- PACKAGES STYLES -->
<link rel="stylesheet" href="styles/packages.css">


<!--function to make price large and purple onmouseover-->
<div>
    <script type="text/javascript">
        function scaleUp(obj, size, color = "black") {
            obj.style.fontSize = size;
            obj.style.color = color;
        }
    </script>
</div>

<!--bootstrap function for pic descriptions when mouse is over image-->
<div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</div>

<h1>Vacation Packages</h1>
</td>

<div class="container">
    <div class="card-deck">
        <div class="card mb-4">
            <img title="Paro Taktsang: The Tiger's Nest Monastery in Paro" class="card-img-top img-fluid" src="media\packageimg\Bhutan.jpg">
            <div class="card-body">
                <h4 class=purple class="card-title">Bhutan</h4>
                <p class="card-text">Bhutan is known for its monasteries, fortresses (or dzongs) and dramatic
                    landscapes that range from subtropical plains to steep mountains and valleys. Ideal for a Zen
                    trip, with a peace and calm that you don't experience anywhere else. Seek inner peace with a
                    transcendent that uses oils from the Himalayas. You can also challenge yourself to trek to
                    places like the Tiger Nest, a cliffside Buddhist temple.</p>
                <h6>April 6-12</h6>
                <p onmouseover="scaleUp(this,'24px', 'rgb(121, 0, 151)')" onmouseout="scaleUp(this,'16px')">$2500
                </p>
                <button type="button" class="btn btn-outline-success">Order Online Coming Soon</button>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="card mb-4">
            <img title="Lagoa do Fogo: Lagoon of Fire in Sao Miguel" class="card-img-top img-fluid" src="media\packageimg\Azores.jpg">
            <div class="card-body">
                <h4 class=purple class="card-title">Azores</h4>
                <p class="card-text">The Azores are known for outdoor adventure along with historical and cultural
                    charm. These islands have something for everyone: vineyards, volcanic crater lakes, world-class
                    whale watching, hot springs, UNESCO protected landscapes, natural swimming pools, thermal
                    springs, diving, surfing, waterfalls - this destination is one big playground that's rich in
                    natural beauty. </p>
                <h6>April 6-12</h6>
                <p onmouseover="scaleUp(this,'24px', 'rgb(121, 0, 151)')" onmouseout="scaleUp(this,'16px')">$2500
                </p>
                <button type="button" class="btn btn-outline-success">Order Online Coming Soon</button>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <!--the following code is because bootstrap cards are not reponsive to window size and was used/modiifed often below as the intent was to have no more than 3 cards across for large windows, 2 on small and 1 oon the smallest-->
        <div class="w-100 d-none d-sm-block d-md-none">
            <!-- wrap every 2 on sm-->
        </div>
        <div class="card mb-4">
            <img title="Belmond Savute Elephant Lodge in Chobe National Park" class="card-img-top img-fluid" src="media\packageimg\Botswana.jpg">
            <div class="card-body">
                <h4 class=purple class="card-title">Botswana</h4>
                <p class="card-text">Botswana is your destination for unforgettable adventures and authentic
                    experiences. Try glamping in the heart of Chobe National Park in beautiful lodges with amazing
                    wildlife viewing in the savannah. Perfect way to disconnect from your routine and connect with
                    wildlife and nature, but still have the opportunity to enjoy the kind of comfort and luxury that
                    makes a difference in a trip of a lifetime. </p>
                <h6>April 6-12</h6>
                <p onmouseover="scaleUp(this,'24px', 'rgb(121, 0, 151)')" onmouseout="scaleUp(this,'16px')">$2500
                </p>
                <button type="button" class="btn btn-outline-success">Order Online Coming Soon</button>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="w-100 d-none d-md-block d-lg-none">
            <!-- wrap every 3 on md-->
        </div>
        <div class="w-100 d-none d-lg-block d-xl-none">
            <!-- wrap every 3 on lg-->
        </div>
        <div class="w-100 d-none d-xl-block">
            <!-- wrap every 3 on xl-->
        </div>
        <div class="card mb-4">

            <img title="Nyhavn: 17th-century waterfront, canal and entertainment district in Copenhagen" class="card-img-top img-fluid" src="media\packageimg\Copenhagen.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class=purple class="card-title">Copenhagen</h4>
                <p class="card-text">Copenhagen is the epitome of Scandi cool. A city of endless visual pleasure; a
                    place where even the most mundane activities are laced with a sense of quiet wonder and delight.
                    It's also one of the globe's greenest, cleanest, most sustainable urban centres. From Viking
                    treasures in a former prince's palace to iconic Danish chairs in a one-time baroque hospital,
                    Copenhagen's cultural offerings are rich and eclectic.</p>
                <h6>April 6-12</h6>
                <p onmouseover="scaleUp(this,'24px', 'rgb(121, 0, 151)')" onmouseout="scaleUp(this,'16px')">$2500
                </p>
                <button type="button" class="btn btn-outline-success">Order Online Coming Soon</button>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="w-100 d-none d-sm-block d-md-none">
            <!-- wrap every 2 on sm-->
        </div>
        <div class="card mb-4">
            <img title="The Cidade Maravilhosa: Marvelous City" class="card-img-top img-fluid" src="media\packageimg\RiodeJaneiro.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class=purple class="card-title">Rio de Janeiro</h4>
                <p class="card-text">Rio de Janeiro welcomes visitors with its scenic vistas and lively festivals.
                    The extravagant Carnival celebration held each February or March includes days of masquerade
                    balls, parades and parties. Those looking for a well-rounded trip to Rio should check out the
                    towering Christ the Redeemer statue, explore the 340-acre Jardim Botânico, and spend some time
                    lazing on Ipanema or Copacabana beach.</p>
                <h6>April 6-12</h6>
                <p onmouseover="scaleUp(this,'24px', 'rgb(121, 0, 151)')" onmouseout="scaleUp(this,'16px')">$2500
                </p>
                <button type="button" class="btn btn-outline-success">Order Online Coming Soon</button>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="card mb-4">
            <img title="Ginza 4-chome intersection in Tokyo" class="card-img-top img-fluid" src="media\packageimg\Tokyo.jpg">
            <div class="card-body">
                <h4 class=purple class="card-title">Tokyo</h4>
                <p class="card-text">Tokyo is Japan's capital and the world's most populous metropolis. The city
                    offers a seemingly unlimited choice of shopping, entertainment, culture and dining. The city's
                    history can be appreciated in its many excellent museums, historic temples and gardens. Contrary
                    to common perception, Tokyo also offers a number of attractive green spaces in the city center
                    and within relatively short train rides at its outskirts.</p>
                <h6>April 6-12</h6>
                <p onmouseover="scaleUp(this,'24px', 'rgb(121, 0, 151)')" onmouseout="scaleUp(this,'16px')">$2500
                </p>
                <button type="button" class="btn btn-outline-success">Order Online Coming Soon</button>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="w-100 d-none d-sm-block d-md-none">
            <!-- wrap every 2 on sm-->
        </div>
        <div class="w-100 d-none d-md-block d-lg-none">
            <!-- wrap every 3 on md-->
        </div>
        <div class="w-100 d-none d-lg-block d-xl-none">
            <!-- wrap every 3 on lg-->
        </div>
        <div class="w-100 d-none d-xl-block">
            <!-- wrap every 3 on xl-->
        </div>
        <div class="card mb-4">
            <img title="Angkor Wat is a temple complex and one of the world's largest religious monuments in Cambodia" class="card-img-top img-fluid" src="media\packageimg\AngkorWat.jpg">
            <div class="card-body">
                <h4 class=purple class="card-title">Angkor Wat</h4>
                <p class="card-text">Angkor Wat is one of the most popular temples in Cambodia. Originally a Hindu
                    temple it gradually transformed into a Buddhist temple. Built by King Suryavarman the Second,
                    it's a classic example of Khmer school of architecture. Famed for being the only temple, which
                    stands oriented in the west direction, tourists can only drop their jaws at the grandeur and the
                    beauty.</p>
                <h6>April 6-12</h6>
                <p onmouseover="scaleUp(this,'24px', 'rgb(121, 0, 151)')" onmouseout="scaleUp(this,'16px')">$2500
                </p>
                <button type="button" class="btn btn-outline-success">Order Online Coming Soon</button>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="card mb-4">

            <img title="Ramses II temple built in the 13th century BC in Egypt" class="card-img-top img-fluid" src="media\packageimg\AbuSimbel.jpg">
            <div class="card-body">
                <h4 class=purple class="card-title">Abu Simbel</h4>
                <p class="card-text">Abu Simbel is undisputedly one of the world's most breathtaking monuments. The
                    two temples are dedicated to Ramses II and his favourite wife Nefertari. The most remarkable
                    feature is that the construction is oriented in a way that twice a year, the morning sun rays
                    shine through the length of the inner temple cave and illuminate the statues of the four gods
                    seated at the end of the cave.</p>
                <h6>April 6-12</h6>
                <p onmouseover="scaleUp(this,'24px', 'rgb(121, 0, 151)')" onmouseout="scaleUp(this,'16px')">$2500
                </p>
                <button type="button" class="btn btn-outline-success">Order Online Coming Soon</button>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="w-100 d-none d-sm-block d-md-none">
            <!-- wrap every 2 on sm-->
        </div>
        <div class="card mb-4">
            <img title="Parthenon, temple that dominates the hill of the Acropolis at Athens" class="card-img-top img-fluid" src="media\packageimg\Parthenon.jpg">
            <div class="card-body">
                <h4 class=purple class="card-title">Parthenon</h4>
                <p class="card-text">The Parthenon in Athens is the most famous surviving building of Ancient Greece
                    and one of the most famous buildings in the world. You can almost feel the history in the air.
                    It has stood atop the Acropolis of Athens for nearly 2,500 years and was built to give thanks to
                    Athena, the city's patron goddess. Throughout its long life, it has also been a treasury, a
                    fortress, a church, and a mosque.</p>
                <h6>April 6-12</h6>
                <p onmouseover="scaleUp(this,'24px', 'rgb(121, 0, 151)')" onmouseout="scaleUp(this,'16px')">$2500
                </p>
                <button type="button" class="btn btn-outline-success">Order Online Coming Soon</button>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

    </div>
</div>

<?php require "scripts/footer.php" ?> 