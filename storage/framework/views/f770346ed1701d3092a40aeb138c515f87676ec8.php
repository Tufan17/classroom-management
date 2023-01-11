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
<div class=" d-flex justify-content-between tab_title">
    <h4 >
        <?php echo e($lesson->name); ?> Dersi Yoklama
    </h4>
    <div>
        <button onclick="history.back();" type="button" class="btn btn-warning" style="color: beige"><i class="fa fa-mail-reply"></i></button>
    </div>    
</div>
<div class=" d-flex justify-content-between tab_title">
    <div></div>
    <form class="row" action="/attendance/lesson/<?php echo e($lesson->id); ?>">
        <input class="card" type="text" name="day" value="<?php echo e($day); ?>"/>
        <select class="card" name="month" value="" class="form-select" aria-label="Default select example" required>
            <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option class="card" name="month" value='<?php echo e($month); ?>' ><?php echo e($month); ?></option>                   
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        <input class="card" type="text" name="year" value="<?php echo e($year); ?>"/>
        
            <button class="btn btn-warning btn-send"     type="submit">Gönder</button>
    </form>
</div>

<div class="container-table">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                
                <th scope="col">Öğrencinin Adı</th>
                


            </tr>
        </thead>
        <tbody>

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td scope="row"> 
                <?php echo e($user["sequence"]); ?></td>
                
                <td><?php echo e($user["name"]); ?></td>
                


            </tr>
        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>


</div>



<style>
    .card{
        float: left;
    }
    .container-table{
        margin-left: 10rem;
        margin-right: 10rem;
    }
    .btn-send{
        color:white;
        float: left;
        width: 5rem;
    }
    .tab_title{
        margin-left: 10rem;
        margin-right: 10rem;        
    }
    .card{
        margin-right: 2%;
        width: 20%;
    }
    .row{
        margin-left : 2%;
        margin-right: 2%;
    }

    
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\bitirme\classroom-management\resources\views/attendance/lesson.blade.php ENDPATH**/ ?>