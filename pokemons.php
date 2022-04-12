<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemons</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="pokemons">

        <div class="pokemon-item">
            <?php
            $base = 'https://pokeapi.co/api/v2/pokemon/';
            $id = 25;
            $data = file_get_contents($base.$id.'/');
            $pokemon = json_decode($data);
            ?>

            <h1 class="name__pokemon">

                <?php echo $pokemon -> name;?>
            </h1>
            <div class="photo__pokemon">
                <?php echo '<img src="'.$pokemon->sprites->front_default.'" width="400">';?>
            </div>
            <h2 class="abilities__pokemon-title">Abilities</h2>
            <div class="abilities__pokemon">
                <?php 
                foreach($pokemon->abilities as $key => $value) {
                echo  $value->ability->name.'<br>';
            }
            ?>
            </div>
            <h2 class="title">Stats</h2>
            <div class="stats__pokemon">
                <?php
                $i=0;
                foreach($pokemon->stats as $key => $value) {
                    echo $value->stat->name. ": ";
                    echo $value->base_stat ."<br>";
                    $i++;  
                    if($i==3){
                        break;
                    }
                } 
                ?>
            </div>
            <h2 class="title">Forms</h2>
            <div class="forms__pokemon">
                <?php
                    echo "Поточна форма: " . $pokemon->forms[0]->name . "<br>";
                    if($pokemon->forms[1]->name){
                        echo " еволюціонує в " . $pokemon->forms[1]->name;
                    }else{
                        echo "Це остання форма еволюції покемона";
                    }
                ?>
            </div>
        </div>
        <div class="pokemon-item">
            <?php
                $base = 'https://pokeapi.co/api/v2/pokemon/';
                $id = 9;
                $data = file_get_contents($base.$id.'/');
                $pokemon = json_decode($data);
                ?>
            <h1 class="name__pokemon">
                <?php echo $pokemon -> name;?>
            </h1>
            <div class="photo__pokemon">
                <?php echo '<img src="'.$pokemon->sprites->front_default.'" width="400">';?>
            </div>
            <h2 class="abilities__pokemon-title">Abilities</h2>
            <div class="abilities__pokemon">
                <?php 
                foreach($pokemon->abilities as $key => $value) {
                echo  $value->ability->name.'<br>';
            } 
                ?>
            </div>
            <h2 class="title">Stats</h2>
            <div class="stats__pokemon">
                <?php
                $i=0;
                foreach($pokemon->stats as $key => $value) {
                    echo $value->stat->name. ": ";
                    echo $value->base_stat ."<br>";
                    $i++;  
                    if($i==3){
                        break;
                    }
                } 
                ?>
            </div>
            <h2 class="title">Forms</h2>
            <div class="forms__pokemon">
                <?php
                    echo "Поточна форма: " . $pokemon->forms[0]->name . "<br>";
                    if($pokemon->forms[1]->name){
                        echo " еволюціонує в " . $pokemon->forms[1]->name;
                    }else{
                        echo "Це остання форма еволюції покемона";
                    }
                ?>
            </div>
        </div>

        <div class="pokemon-item">
            <?php
                $base = 'https://pokeapi.co/api/v2/pokemon/';
                $id = 15;
                $data = file_get_contents($base.$id.'/');
                $pokemon = json_decode($data);
                ?>
            <h1 class="name__pokemon">
                <?php echo $pokemon -> name;?>
            </h1>
            <div class="photo__pokemon">
                <?php echo '<img src="'.$pokemon->sprites->front_default.'" width="400">';?>
            </div>
            <h2 class="abilities__pokemon-title">Abilities</h2>
            <div class="abilities__pokemon">
                <?php 
                foreach($pokemon->abilities as $key => $value) {
                echo  $value->ability->name.'<br>';
                } 
                ?>
            </div>
            <h2 class="title">Stats</h2>
            <div class="stats__pokemon">
                <?php
                $i=0;
                foreach($pokemon->stats as $key => $value) {
                    echo $value->stat->name. ": ";
                    echo $value->base_stat ."<br>";
                    $i++;  
                    if($i==3){
                        break;
                    }
                } 
                ?>
            </div>
            <h2 class="title">Forms</h2>
            <div class="forms__pokemon">
                <?php
                    echo "Поточна форма: " . $pokemon->forms[0]->name . "<br>";
                    if($pokemon->forms[1]->name){
                        echo " Еволюціонує в " . $pokemon->forms[1]->name;
                    }else{
                        echo "Це остання форма еволюції покемона";
                    }
                ?>
            </div>
        </div>
    </div>
</body>

</html>