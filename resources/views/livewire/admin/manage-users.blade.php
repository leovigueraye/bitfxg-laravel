
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div >
        <div class="">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{ $text }}">{{ $settings->site_name }} users list</h1>
                </div>
                <x-danger-alert />
                <x-success-alert />
                
                <div class="mb-5 row">
                    <div class="col-md-12 ">
                        <div class="card shadow p-4 bg-{{ $bg }}">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6 d-flex pe-0">
                                        <div>
                                            <form>
                                                <div class="input-group">
                                                    <input wire:model.debounce.500ms='searchvalue' class="form-control form-control-sm shadow-none search bg-{{ $bg }} text-{{ $text }}" type="search" placeholder="name, username or email" aria-label="search" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        @if ($checkrecord)
                                            <div>
                                                <div class="d-flex">
                                                    <select wire:model='action' class="form-control bg-{{ $bg }} text-{{ $text }} form-select form-select-sm" aria-label="Bulk actions">
                                                        <option value="Delete">Delete</option>
                                                        <option value="Clear">Clear Account</option>
                                                    </select>
                                                    <button class="btn btn-danger btn-sm ms-2" wire:click='delsystemuser' type="button">Apply</button>
                                                    &nbsp;&nbsp;
                                                    <button class="btn btn-info btn-sm " data-toggle="modal" data-target="#TradingModal" type="button">
                                                        <span class="fas fa-coins" data-fa-transform="shrink-3 down-2"></span>
                                                        <span class="d-none d-sm-inline-block ms-1">Add ROI</span>
                                                    </button>
                                                    &nbsp;&nbsp;
                                                    <button  data-toggle="modal" data-target="#topupModal" class="btn btn-info btn-sm " type="button">
                                                        <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                                                        <span class="d-none d-sm-inline-block ms-1">Topup</span>
                                                    </button>
                                                </div>
                                                
                                            </div> 
                                        @else
                                            <div>
                                                <button class="btn btn-primary btn-sm float-right" type="button" data-toggle="modal" data-target="#adduser">
                                                    <span class="fas fa-user-plus" data-fa-transform="shrink-3 down-2"></span>
                                                    <span class="d-none d-sm-inline-block ms-1">New User</span>
                                                </button>
                                                
                                                <button class="btn btn-info btn-sm " type="button" data-toggle="modal" data-target="#sendmailModal">
                                                    <span class="fas fa-envelope" data-fa-transform="shrink-3 down-2"></span>
                                                    <span class="d-none d-sm-inline-block ms-1">Send Message</span>
                                                </button>

                                                @if ($settings->enable_kyc == 'yes')
                                                    <a href="{{ url('admin/dashboard/kyc') }}" class="btn btn-warning btn-sm">
                                                        <span class="fas fa-user-alt" data-fa-transform="shrink-3 down-2"></span> 
                                                        <span class="d-none d-sm-inline-block ms-1">KYC List</span>
                                                    </a>
                                                @endif
                                            </div> 
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive" data-example-id="hoverable-table">
                                    <table class="table table-hover text-{{ $text }}">
                                        <thead>
                                            <tr>
                                                <th class="white-space-nowrap">
                                                    <input type="checkbox" wire:model='selectPage' />
                                                </th>
                                                <th>Client Name</th>
                                                <th>Username</th>
                                                <th>Account Balance</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th>Date registered</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="userslisttbl">
                                            {{-- @if ($selectPage)
                                                <tr class="bg-light">
                                                    <td colspan="10">
                                                        @unless ($selectAll)
                                                            Do you want to select all <strong>{{$users->total()}}</strong> users?
                                                            <a href="#" wire:click.prevent="selectAll" class="stretched-link">Select All</a>
                                                        @else
                                                        You have selected all <strong>{{$users->total()}}</strong> users.
                                                        @endif
                                                        
                                                    </td>
                                                </tr>  
                                            @endif --}}
                                            
                                            @forelse ($users as $user)
                                                <tr>
                                                    <td class="align-middle">
                                                        <input type="checkbox" wire:model='checkrecord' value="{{$user->id}}" />
                                                    </td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->username}}</td>
                                                    <td>{{$settings->currency}}{{number_format($user->account_bal)}}</td> 
                                                    <td>{{$user->email}}</td> 
                                                    <td>{{$user->phone}}</td>
                                                    <td>
                                                        @if ($user->status == 'active')
                                                        <span class='badge badge-success'>{{$user->status}}</span> 
                                                        @else
                                                        <span class='badge badge-danger'>{{$user->status}}</span> 
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$user->created_at->diffForHumans()}}
                                                    </td>
                                                    <td>
                                                        <a class='btn btn-secondary btn-sm' href="{{route('viewuser', $user->id)}}" role='button'>
                                                            Manage
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <td colspan="9">
                                                    No Data Available
                                                </td>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer bg-{{$bg}} py-2">
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                      <select wire:model='pagenum' class="form-control bg-{{ $bg }} text-{{ $text }}">
                                          <option>10</option>
                                          <option>20</option>
                                          <option>50</option>
                                          <option>100</option>
                                          <option>200</option>
                                      </select>
                                    </div>
                                    <div class="col-auto">
                                        <select wire:model='orderby' class="form-control bg-{{ $bg }} text-{{ $text }}">
                                            <option value="id">id</option>
                                            <option value="name">Name</option>
                                            <option value="email">Email</option>
                                            <option value="created_at">Sign up date</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <select wire:model='orderdirection' class="form-control bg-{{ $bg }} text-{{ $text }}">
                                            <option value="desc">Descending</option>
                                            <option value="asc">Ascending</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        {!!$users->links()!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modals --}}
    <!-- Modal -->
    <div class="modal fade" tabindex="-1" id="adduser" aria-h6ledby="exampleModalh6" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-{{$bg}}">
                    <h3 class="mb-2 d-inline text-{{$text}}">Add User</h3>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal" aria-h6="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-{{$bg}}">
                    <div>
                        <form method="POST" wire:submit.prevent='saveUser'>
                            
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <h6 class="text-{{$text}}">Username</h6>
                                    <input type="text" id="usernameinput" class="form-control bg-{{$bg}} text-{{$text}}" name="username" wire:model.defer='username' required>
                                </div>
                                <div class="form-group col-md-12">
                                    <h6 class="text-{{$text}}">Fullname</h6>
                                    <input type="text" class="form-control bg-{{$bg}} text-{{$text}}" name="name" wire:model.defer='fullname' required>
                                </div>
                                <div class="form-group col-md-12">
                                    <h6 class="text-{{$text}}">Email</h6>
                                    <input type="email" class="form-control bg-{{$bg}} text-{{$text}}" name="email" wire:model.defer='email' required>
                                </div>
                                <div class="form-group col-md-12">
                                    <h6 class="text-{{$text}}">Password</h6>
                                    <input type="text" class="form-control bg-{{$bg}} text-{{$text}}" name="password" wire:model.defer='password' required>
                                </div>
                            </div>
                            <button type="submit" class="px-4 btn btn-primary">Add User</button>
                        </form>  
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- End add user modal --}}

    <!-- send all users email -->
	<div id="sendmailModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
			  <h4 class="modal-title text-{{$text}}">This message will be sent to all your users.</h4>
			  <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body bg-{{$bg}}">
				  <form method="post" wire:submit.prevent='sendMailToall'>
					<div class=" form-group">
						<input type="text" name="subject" wire:model.defer='subject' class="form-control bg-{{$bg}} text-{{$text}}" placeholder="Subject" required>
					</div>
					<div class=" form-group">
						<textarea placeholder="Type your message here" wire:model.defer='message' class="form-control bg-{{$bg}} text-{{$text}}" name="message" row="8" placeholder="Type your message here" required></textarea>
					</div>
                    <div class=" form-group">
                        
                        <button type="submit" class="btn btn-secondary" wire:loading.attr="disabled">
                            <span class="" wire:loading>Sending...</span>
                            <span wire:loading.remove>Send</span>
                        </button>	
					</div>
                    
				 </form>
			</div>
		  </div>
		</div>
    </div>
    <!-- /send all users email Modal -->

    <!-- /Trading History Modal -->
        
    <div id="TradingModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{$bg}}">
                    <h4 class="modal-title text-{{$text}}">Add ROI to selected users{{$user->l_name}} </h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{$bg}}">
                    <form role="form" method="post" wire:submit.prevent='addRoi'>
                        <div class="form-group">
                            <h5 class=" text-{{$text}}">Select Investment Plan</h5>
                            <select class="form-control bg-{{$bg}} text-{{$text}}" name="plan" wire:model.defer='plan' required>
                                <option></option>
                            @foreach($plans as $plan)
                                <option value="{{$plan->id}}">{{$plan->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h5 class=" text-{{$text}}">Date</h5>
                            <input type="date" wire:model.defer='datecreated' class="form-control bg-{{$bg}} text-{{$text}}" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-{{$text}}" value="Add History">
                        </div>
                        <div class="form-group">
                            <small class="text-{{$text}}">The system will calculate the ROI base on users invested amount and topup amount specified in this selected plan settings <br> 
                                <strong>Also Note the plan must be using % as it's topup-type else the calculations will be wrong.</strong> </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /send a single user email Modal -->

    <!-- Top Up Modal -->
    <div id="topupModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{$bg}}">
                    <h4 class="modal-title text-{{$text}}">Credit/Debit Accounts.</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{$bg}}">
                    <form method="post" wire:submit.prevent='topup'>
                        <div class="form-group">
                            <input class="form-control bg-{{$bg}} text-{{$text}}" placeholder="Enter amount" type="number" step="any" name="amount" wire:model.defer='topamount' required>
                            <small>{{$topamount}}</small>
                        </div>
                        <div class="form-group">
                            <h5 class="text-{{$text}}">Select where to Credit/Debit</h5>
                            <select class="form-control bg-{{$bg}} text-{{$text}}" wire:model.defer='topcolumn' name="type" required>
                                <option value="" selected disabled>Select Column</option>
                                <option value="Bonus">Bonus</option>
                                <option value="balance">Account Balance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h5 class="text-{{$text}}">Select credit to add, debit to subtract.</h5>
                            <select class="form-control bg-{{$bg}} text-{{$text}}" wire:model.defer='toptype' name="t_type" required>
                                <option value="">Select type</option>
                                <option value="Credit">Credit</option>
                                <option value="Debit">Debit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-{{$text}}" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /deposit for a plan Modal -->
</div>
