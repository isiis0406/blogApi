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
        Authorization: 'Bearer 2|mCDjh1wgj01ITnD14uePFcyanFDgj1LhhdSrsPDp' },
         body: JSON.stringify(newPost)
    }).then(
   (response => response.json()))
//    .then(
//     (data => console.log(data))
//    )
   
    
   


</script>