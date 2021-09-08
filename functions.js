function getter(obj){
const url = "https://jsonplaceholder.typicode.com/";
        fetch(url+obj)
            .then(resp => resp.json())
            .then(ret => { 
                if(obj === 'posts'){
                    completarPost(ret);
                }
                else if (obj === 'albums') {
                    completarAlbuns(ret);
                } else {
                    completarTodos(ret);
                }
                
                
                
            })
}
function completarPost(ret){
    $(document).ready(function () {
        $('#tblPosts').DataTable(
    {
        "data": ret,
        "pageLength": 4,
        "columns": [
            { "data": "userId" },
            { "data": "id" },
            { "data": "title" },
            { "data": "body" }

        ]
    }

);
});
}

function completarTodos(ret){
    console.log(ret)
    $(document).ready(function () {
        $('#tblTodos').DataTable(
    {
        "data": ret,
        "pageLength": 4,
        "columns": [
            { "data": "userId" },
            { "data": "id" },
            { "data": "title" },
            { "data": "completed" }

        ]
    }

);
});
}

function completarAlbuns(ret){
    $(document).ready(function () {
        $('#tblAlbuns').DataTable(
    {
        "data": ret,
        "pageLength": 3,
        "columns": [
            { "data": "userId" },
            { "data": "id" },
            { "data": "title" }

        ]
    }

);
});
}