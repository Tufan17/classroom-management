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
            <?php echo e($exam["name"]); ?>

        </h4>
        <div>
            <button type="button" class="btn btn-success" ><a href="/exam/<?php echo e($exam["id"]); ?>" class="white_a">Görüntüle</a></button>

            <button onclick="history.back();" type="button" class="btn btn-warning" style="color: beige"><i class="fa fa-mail-reply"></i></button>
        </div>
    </div>
</div>
<?php
$i=0;
?>
<div class="ml-5 mr-5 mt-5">
    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card mr-1 ml-2 mb-5 float-left" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><strong><?php echo e($i=1+$i); ?>) </strong><?php echo e($question->title); ?></h5>
      <p class="card-text"><strong>A-</strong><?php echo e($question->A); ?></p>
      <p class="card-text"><strong>B-</strong><?php echo e($question->B); ?></p>
      <p class="card-text"><strong>C-</strong><?php echo e($question->C); ?></p>
      <p class="card-text"><strong>D-</strong><?php echo e($question->D); ?></p>
      <p class="card-text">Doğru cevap <strong><?php echo e($question->correct); ?></strong> şıkkı.</p>
     <form action="/examquestions/store" class="ml-5 mr-5">
        <input type="hidden" name="question_id" value="<?php echo e($question->id); ?>"/>
        <input type="hidden" name="exam_id" value="<?php echo e($exam->id); ?>"/>

        <button type="submit" class="btn btn-success ml-5">Ekle</button>
     </form>
    </div>
  </div>
  
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<style>
    input{
        flex-direction: column;
        margin: 2rem;
        float: bottom;
    }
    p{
        margin-left: 2rem;
    }
</style>


<script type="text/javascript">
        function view(id){
            console.log(id);
        }

</script>
            
<style>
    .btn{
        height: 2.5rem;
    }
    .form-select{
        margin: 2rem;

    }
    .row {
        margin-left: 5rem;
        margin-right: 5rem;
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
    
    

</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\bitirme\classroom-management\resources\views/exam/question-add.blade.php ENDPATH**/ ?>