<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<?php $__env->startSection('content'); ?>

<div class="row">
    <div class=" d-flex justify-content-between">
        <h4 >
            Sınavlar
        </h4>
        <div>
            <button type="button" class="btn btn-success" ><a href="/exam/add" class="white_a">Ekle</a></button>
            <button onclick="history.back();" type="button" class="btn btn-warning" style="color: beige"><i class="fa fa-mail-reply"></i></button>

        </div>
    </div>
    <div class="emptyContainer row">

        <?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                
            <span style='font-size:100px;'>&#128203;</span>
              <h5 class="card-title"><?php echo e($exam["name"]); ?></h5>
              <?php if( $exam["status"]=="loading"): ?>
                  <p class="card-text">Sınav hazırlanıyor...</p>
                  <a href="/exam/addquestion/<?php echo e($exam["id"]); ?>" class="card-link btn btn-success">Ekle</a>
                  <a  href="/exam/published/<?php echo e($exam["id"]); ?>" class="btn btn-warning">Yayınla</a>
                  <a  href="/exam/<?php echo e($exam["id"]); ?>" class="btn btn-secondary">Görüntüle</a>
                  
                  <?php endif; ?>
              
            
              <?php if($exam["status"]=="published"): ?>
              <p class="card-text">Sınavınız yayınlandı.</p>

              <a href="/exam/finished/<?php echo e($exam["id"]); ?>" class="card-link btn btn-success">Bitir</a>
            
              <a  href="/exam/<?php echo e($exam["id"]); ?>" class="btn btn-warning">Görüntüle</a>
              <?php endif; ?>
              <?php if($exam["status"]=="finished"): ?>
              <p class="card-text">Sınav sonlandırıldı.</p>

              <a href="/result/<?php echo e($exam["id"]); ?>" class="card-link btn btn-success">Sonuçlar</a>
            
              <?php endif; ?>

              <a href="/exam/delete/<?php echo e($exam["id"]); ?>" class="card-link btn btn-danger">Sil</a>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if(count($exams)==0): ?>
        <div class="emptyContainer">
            <h5 class="emptyTitle">
                Herhangi bir sınav bulunamadı...
            </h5>
        </div>
        <?php endif; ?>
    </div>

</div>




<script type="text/javascript">
        function view(id){
            console.log(id);
        }

</script>
            
<style>
    .btn{
        margin: 1px;
    }
    .card{
        margin:3rem;
        max-height: 21rem; 
    }
    .btn{
        height: 2.5rem;
    }
    .row {
        margin-left: 10rem;
        margin-right: 10rem;
    }
    a {
        text-decoration: none;
        color:black;
    }
    .white_a{
        color: beige;
        padding: 5px;
        text-align: start;
    }
    .emptyContainer {
    width: 100rem;
    height: 50rem;
    text-align: center;
    /* background-color: blue; */
    }
    .emptyTitle{
        padding-top: 21rem;
    }

</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\classroom-management\resources\views/exam/exam.blade.php ENDPATH**/ ?>