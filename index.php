<?php
include 'header.php';
?>
<script src="functions.js"></script>
<main class="container">
    <div class="bg-light p-4 rounded">
        
        <h3>Menu Inicial</h3>
        
    </div>

    <br>
    <div class="col-lg-12" id="texto">
        
        <h5>Qual tabela voce deseja acessar?</h3>
        
    </div>
    <br>
    

        <div class="row">
        <div class="col-lg-4">
                <div class="bg-light p-4 rounded">
                        <h4> <a class="nav-link bi bi-pencil" href="posts.php"> Posts</a> </h4>                    
                </div>
            </div>
            <div class="col-lg-4">
               <div class="bg-light p-4 rounded">
                    
                    <h4><a class="nav-link bi bi-book" href="albuns.php"> Albuns</a></h4>
                    
                </div>
            </div> 
            <div class="col-lg-4">
               <div class="bg-light p-4 rounded ">
                    
                    <h4><a class="nav-link bi bi-clipboard-check" href="todos.php"> TO-DOs</a></h4>
                    
                    
                </div>
            </div>
    

            
        </div>
    </div>
</main>




<?php
include 'footer.php';
?>