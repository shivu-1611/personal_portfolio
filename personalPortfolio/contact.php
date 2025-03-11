<?php
   include("index.php");
?>


<style>
   *{
    margin: 0;
    padding: 0;
}

body{
    background-color: rosybrown;
}


.container{
    background-color: aliceblue;
    color:black;
    padding: 2rem;
    border-radius: 2rem;
    min-height: 45vh;
    width: 100vh;
}


form select,button , input {
    width: 80%;
    border: none;
    outline: none;
    border-radius: 1rem;
}

form input{
    border: 1px solid black;
    font-size: 1rem;
    height: 2rem;
    padding-left: 0.7rem;
    margin-top: 0.5rem;
}

form button{
    height: 2rem;
    background-color: #a4a4a4;
    color: white;
    font-size: 1rem;
    cursor: pointer; 
    width:50%;
}
</style>

    <div class="container mt-5">
        <div class="row" style="margin-left:25%">
          <form action="send.php" class="form" method="post">
            <h3 style="margin:0 0 20px 20%">Contact Us Page</h3>
            <div>
               <h4>Name</h4>
                    <input type="text" name="Name" placeholder="Enter Name">
            </div>
   
            <div>
            <h4>Email</h4>
                <input type="email" name="email" placeholder="Enter Email">
            </div>

            <div class="bio-box">
                <h4>Message</h4>
                <textarea name="msg"  cols="43" rows="10"></textarea>
            </div>

              <button type="submit" name="send" style="margin:20px 0 0 20%;">Submit</button>
            
    </form>