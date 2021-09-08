<?php
include 'header.php';
?>

<script src="functions.js"></script>
<main class="container">
    <div class="bg-light p-4 rounded">
        
            <h3>Albuns</h3>
        
    </div>

    <br>
    

        <div class="row">
            

            <div class="col-lg-12">
                <table id="tblAlbuns" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>userId</th>
                            <th>id</th>
                            <th>title</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</main>

<script>
getter('albums') ;
</script>


<?php
include 'footer.php';
?>