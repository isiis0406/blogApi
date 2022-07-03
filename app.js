
    const url = "http://blogsland.test/api/posts";
    const newPost ={
            title: 'salut vous',
            content:'testons voire'
        }

fetch(url,
    {
        method: 'GET',
        headers: {'Accept':'application/json',
                  'Content-type': 'application/json',
        Authorization: 'Bearer 4|IiLZjCepZyeKAgvnSDDTuG1vvMpruJUxXlB7vi7s' },
        // body: JSON.stringify(newPost)
    }).then(
   (response => response.json()
   )).then(
    (data => console.log(data))
   )
   
    
   

