<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentario</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/comentario.css">
</head>
<body>
<div class="container" style="justify-content: center;">
    <div class="col-12 text-center">
        <a class="blog-header-logo text-dark" href="../blog/index.php"><h1>Comentarios</h1></a>
      </div>
     </div>
<div class="card">
               
               <div class="row">
                   
                   <div class="col-2">
                       
                       
                       <img src="https://i.imgur.com/xELPaag.jpg" width="70" class="rounded-circle mt-2">
                   
                   
                   </div>
                   
                   <div class="col-10">
                       
                       <div class="comment-box ml-2">
                           
                           <h4>Añadir un comenatrio</h4>
                           
                           <div class="rating"> 
                               <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                               <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                               <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                               <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                               <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                           </div>
                           
                           <div class="comment-area">
                               
                               <textarea class="form-control" placeholder="Añade tu comentario" rows="4"></textarea>
                           
                           </div>
                           
                           <div class="comment-btns mt-2">
                               
                               <div class="row">
                                   
                                   <div class="col-6">
                                       
                                    <div class="pull-left" style="background-color: #cb1913;">
                                       
                                       <button class="btn btn-success btn-sm"><i class="bi bi-x"></i>Cancelar</button>      
                                           
                                    </div>
                                   
                                   </div>
                                   
                                   <div class="col-6">
                                       
                                       <div class="pull-right">
                                       
                                       <button class="btn btn-success send btn-sm">Enviar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16"><path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/></svg></button>      
                                           
                                       </div>
                                   
                                   </div>
                               
                               </div>
                           
                           </div>
                       
                       
                       </div>
                   
                   </div>
               
               
               </div>
     
           </div>
</body>
</html>