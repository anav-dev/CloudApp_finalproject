<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
  
*{
 font-size: 20px;
}
h2{
    text-align: center;
    font-size: 25px;
} 
#books{    
justify-content: center;
    margin-left: 20%;
   
}
#books .column {
  background-color: #fcfefe;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  opacity: 0.9;
  text-align: center;
  width: 60%;
  margin: auto 32px;      
  border-radius: 1em;
  padding: 1%;
  margin-bottom: 5%;  
}


 
img {
  max-width: 95%;
  max-height: 300px;
  min-height: 10px;  
  margin: 10px;
}


   
#books .column:hover {
    opacity: 0.9;
 
    
}

.container-btn-request {
    position: relative;
}
        
.reserve-btn{
    width: 25%;
    background-color: lightgrey;
    text-align: center;
}

.reserve-btn:hover{
    opacity: 0.5;
    opacity: 0.5;
    cursor: pointer;
    font-size: 25px;
    margin-top: 5px;
}
        .book-info{
            text-align: center;
        }
        .reg-newbook-btn{
            width: 20%;
            align-items:flex-start;
            margin: 40px;
        }
        .book-details{
            text-align: center;
            margin: 5px;
        }
        .header{
             display: flex;
    align-items: center;
    text-align: center;
        }
    </style>
    
</head>
    

    
<body>
    
<?php
$a = "hello";
?>
    <h2> BOOK LIST</h2>
    <button class="reg-newbook-btn"><a href="/book-reg-create">Register a new book!</a></button>
        

<section id="books">
        
    
            <div class="row">
                <div class="column">
                    <div>
                        <div class="book-info">
                            <img src="<?php echo base_url('images/book1.jpg'); ?>" width="200" height="300"/>    
                            <div class="book-details">
                                <b>Title:</b> Atomic Habits<br>
                                <b>Author:</b> James Clear<br>
                                <button class="reserve-btn"><a href="/reserve-book-add">Reserve book</a></button>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div>
                        <div class="book-info">
                            <img src="<?php echo base_url('images/book2.jpg'); ?>" width="200" height="300"/>    
                            <div class="book-details">
                                <b>Title:</b> Verity<br>
                                <b>Author:</b> Colleen Hoover<br>
                                <button class="reserve-btn"><a href="/reserve-book-add">Reserve book</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <div class="book-info">
                            <img src="<?php echo base_url('images/book3.jpg'); ?>" />    
                            <div class="book-details">
                                <b>Title:</b> It ends with us<br>
                                <b>Author:</b> Colleen Hoover<br>
                                <button class="reserve-btn"><a href="/reserve-book-add">Reserve book</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div>
                        <div class="book-info">
                            <img src="<?php echo base_url('images/book4.jpg'); ?>" width="200" height="300"/>    
                            <div class="book-details">
                                <b>Title:</b> Ugly love<br>
                                <b>Author:</b> Colleen Hoover<br>
                                <button class="reserve-btn"><a href="/reserve-book-add">Reserve book</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="column">
                    <div>
                        <div class="book-info">
                            <img src="<?php echo base_url('images/book5.jpg'); ?>" width="200" height="300"/>    
                            <div class="book-details">
                                <b>Title:</b> The Midnight library<br>
                                <b>Author:</b> Matt Haig<br>
                                <button class="reserve-btn"><a href="/reserve-book-add">Reserve book</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div>
                        <div class="book-info">
                            <img src="<?php echo base_url('images/book6.jpg'); ?>" width="200" height="300"/>    
                            <div class="book-details">
                                <b>Title:</b> The Ickabog<br>
                                <b>Author:</b> J.K.Rowling<br>
                                <button class="reserve-btn"><a href="/reserve-book-add">Reserve book</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div>
                        <div class="book-info">
                            <img src="<?php echo base_url('images/book7.jpg'); ?>" width="200" height="300"/>    
                            <div class="book-details">
                                <b>Title:</b> Atlas of the heart<br>
                                <b>Author:</b> Brene Brown<br>
                                <button class="reserve-btn"><a href="/reserve-book-add">Reserve book</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div >
                        <div class="book-info">
                            <img src="<?php echo base_url('images/book8.jpg'); ?>" width="200" height="300"/>    
                            <div class="book-details">
                                <b>Title:</b> The power of regret<br>
                                <b>Author:</b> Daniel H. Pink<br>
                                <button class="reserve-btn"><a href="/reserve-book-add">Reserve book</a></button>
                            </div>
                        </div>
                    </div>
                </div>
           
    </section>