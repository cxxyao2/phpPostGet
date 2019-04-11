
        <?php include('partials/nav.php'); ?>
  
       <h1>input your name</h1>

       
       <ui>
        <?php foreach($tasks as $task) : ?>
            <li><?= $task->name ?></li>
        <?php endforeach; ?>
        </ui>
        
        <h1> a post method </h1>
       <form method="POST" action="/names">
           <input name="id" />
           <input name="name"  />
           <button type="submit">submit</button>
       </form>

        <h1>a get method  threads<h1>
        <form method="Get" action="/threads">
           <input name="id" />
           <button type="submit">submit</button>
       </form>


        <div style="border:5px solid blue;">the following is post</div>
        <h1>a post method  threads<h1>
        <form method="Post" action="/threads">
           <label>title</label><input name="title" style="border:5px solid blue;" />
           <label>body</label><input name="body"   style="border:5px solid blue;"/>
           <button type="submit">submit</button>
       </form>
       <ui>
        <?php foreach($threads as $thread) : ?>
            <li><?= $thread->title ?></li>
        <?php endforeach; ?>
        <?php $strJson; ?>
        </ui>

       <?=  readfile('test3.txt'); ?>

        <?php include('partials/footer.php'); ?>
    


