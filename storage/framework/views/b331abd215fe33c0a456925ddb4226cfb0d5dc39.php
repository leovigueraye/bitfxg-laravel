<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="">
            <div class="page-inner">
                <div class="mt-2">
                    <h1 class="title1 text-<?php echo e($text); ?>">Manage leads </h1>
                    <p class="text-<?php echo e($text); ?>">Leads are simply new users that have not engaged with your platform. That is, they have not deposited, or even bought an investment plan. You can follow them up to get them to engage. </p>
                </div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.danger-alert','data' => []]); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.success-alert','data' => []]); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <div class="mb-3 row">
                    <div class="col">
                        <a href="#" data-toggle="modal" data-target="#assignModal" class="btn btn-primary">Assign</a>
                        <!-- Assign Modal -->
                        <div id="assignModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                        <h4 class="modal-title text-<?php echo e($text); ?>">Assign users to admin for follow up</h4>
                                        <button type="button" class="close text-<?php echo e($text); ?>"
                                            data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                        <form role="form" method="post"
                                            action="<?php echo e(route('assignuser')); ?>">
                                            <div class="form-group">
                                                <h5 class="text-<?php echo e($text); ?>">Select User to Assign</h5>
                                                <select name="user_name" id=""
                                                    class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?> select2 w-100" style="width:100%">
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($user->id); ?> "><?php echo e($user->name); ?>

                                                            <?php echo e($user->l_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <h5 class="text-<?php echo e($text); ?>">Select Admin to assign this user to.
                                                </h5>
                                                <select name="admin" id=""
                                                    class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>">
                                                    <option value="">Select</option>
                                                    <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->firstName); ?>

                                                            <?php echo e($user->lastName); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Assign">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Assign Modal end -->
                        <a>
                            <form action="<?php echo e(route('fileImport')); ?>" class="form-inline" method="POST"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <h5 class="text-<?php echo e($text); ?>">Import Leads from Excel</h5> &nbsp; &nbsp;
                                    <input name="file"
                                        class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                                        type="file" required>
                                </div>
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </a>
                        <span>
                            <a href="<?php echo e(route('downlddoc')); ?>" class="btn btn-sm btn-info">download sample document</a>
                        </span>
                    </div>
                </div>
                <div class="mb-5 row">
                    <div class="col-lg-12 card p-4 bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> shadow">
                        <div class="table-responsive" data-example-id="hoverable-table">
                            <table id="ShipTable" class="table table-hover text-<?php echo e($text); ?>">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Date registered</th>
                                        <th>Assigned To</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($list->name); ?></td>
                                            <td><?php echo e($list->email); ?></td>
                                            <td><?php echo e($list->phone); ?></td>
                                            <td><?php echo e($list->status); ?></td>
                                            <td><?php echo e(\Carbon\Carbon::parse($list->created_at)->toDayDateTimeString()); ?></td>
                                            <td>
                                                <?php echo e($list->tuser->firstName); ?> <?php echo e($list->tuser->lastName); ?>

                                            </td>
                                            <td>
                                                <a href="<?php echo e(url('admin/dashboard/convert')); ?>/<?php echo e($list->id); ?>"
                                                        class="m-1 btn btn-primary btn-sm">Converted</a>

                                                <a class="m-1 btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#editModal<?php echo e($list->id); ?>">Edit Status</a>
                                            </td>
                                        </tr>

                                        <div id="editModal<?php echo e($list->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div
                                                        class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                                        <h4 class="modal-title">Edit this User status</h4>
                                                        <button type="button" class="close text-<?php echo e($text); ?>"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div
                                                        class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                                        <form method="post" action="<?php echo e(route('updateuser')); ?>">
                                                            <div class="form-group">
                                                                <h5 class=" text-<?php echo e($text); ?>">User Status</h5>
                                                                <textarea name="userupdate" id="" rows="5" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                                                                    placeholder="Enter here"
                                                                    required><?php echo e($list->userupdate); ?></textarea>
                                                            </div>
                                                            <input type="hidden" name="id" value="<?php echo e($list->id); ?>">
                                                            <input type="hidden" name="_token"
                                                                value="<?php echo e(csrf_token()); ?>">
                                                            <input type="submit" class="btn btn-primary" value="Save">

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /send all users email Modal -->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $('.select2').select2();
            </script>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/leads.blade.php ENDPATH**/ ?>