<h1>Hello world</h1>

<script>
    
    const url = "http://blogsland.test/api/posts";
    const newPost ={
             title: 'salut vous',
             content:'testons voire',
             author:'Jean',
            

        }

fetch(url,
    {
        method: 'POST',
        headers: {'Accept':'application/json',
                  'Content-type': 'application/json',
        Authorization: 'Bearer 1|U71KLJ9lR0yTcFk6Q8kBuVaJzZKJ8h2ZQemydUOD' },
         body: JSON.stringify(newPost)
    }).then(
   (response => response.json()))
//    .then(
//     (data => console.log(data))
//    )
   
    
   


</script>