<div class="mt-5">
  <h1>Todo List<h1>
      <div class="mt-4 mb-4 text-right">
        <a href="/home/create" class="btn btn-lg btn-success">Add Task</a> 
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="responsive">
            <table class="table table-bordered table-responsive w-100 d-block d-md-table">
              <thead>
                <tr class="text-center">
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Task description</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_iterable($this->users)) {?>
                <?php foreach ($this->users as $key => $user) {?>
                <tr class="text-center">
                  <th scope="row"><?=$key+1?></th>
                  <td><?=$user->name?></td>
                  <td><?=$user->email?></td>
                  <td><?= substr($user->tasks_desciption, 0, 30)."..."?></td>
                </tr>
                <?php }?>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>


</div>
