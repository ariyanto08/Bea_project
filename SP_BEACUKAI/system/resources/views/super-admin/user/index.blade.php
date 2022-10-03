@extends('super-admin.master')

@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Project Board</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Project Board</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Project List</h2>
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body project_report">
                <div class="table-responsive">
                    <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Deadline</th>
                                <th>Prograss</th>
                                <th>Lead</th>
                                <th>Team</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="project-title">
                                    <h6>InfiniO 4.1</h6>
                                    <small>Created 14 July, 2020</small>
                                </td>
                                <td>8 Aug, 2020</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
                                    </div>
                                    <small>Completion with: 48%</small>
                                </td>
                                <td><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                    </ul>
                                </td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td class="project-actions">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-title">
                                    <h6>Many desktop publishing packages and web</h6>
                                    <small>Created 18 July, 2020</small>
                                </td>
                                <td>18 Aug, 2020</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                    </div>
                                    <small>Completion with: 78%</small>
                                </td>
                                <td><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                    </ul>
                                </td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td class="project-actions">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-title">
                                    <h6>iNext - One Page Responsive Template</h6>
                                    <small>Created 14 July, 2020</small>
                                </td>
                                <td>22 Aug, 2020</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                                    </div>
                                    <small>Completion with: 29%</small>
                                </td>
                                <td><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                    </ul>
                                </td>
                                <td><span class="badge badge-default">InActive</span></td>
                                <td class="project-actions">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-title">
                                    <h6>Massive Event - Conference and Event</h6>
                                    <small>Created 18 July, 2020</small>
                                </td>
                                <td>25 Sept, 2020</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                    <small>Completion with: 100%</small>
                                </td>
                                <td><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                    </ul>
                                </td>
                                <td><span class="badge badge-danger">Closed</span></td>
                                <td class="project-actions">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-title">
                                    <h6>Oakleaf Admin - Bootstrap html5 with SASS</h6>
                                    <small>Created 18 July, 2020</small>
                                </td>
                                <td>29 Aug, 2020</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%;"></div>
                                    </div>
                                    <small>Completion with: 13%</small>
                                </td>
                                <td><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                    </ul>
                                </td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td class="project-actions">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-title">
                                    <h6>InfiniO 4.1</h6>
                                    <small>Created 14 July, 2020</small>
                                </td>
                                <td>05 Sept, 2020</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
                                    </div>
                                    <small>Completion with: 48%</small>
                                </td>
                                <td><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                    </ul>
                                </td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td class="project-actions">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-title">
                                    <h6>Many desktop publishing packages and web</h6>
                                    <small>Created 18 July, 2020</small>
                                </td>
                                <td>15 Sept, 2020</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                    </div>
                                    <small>Completion with: 78%</small>
                                </td>
                                <td><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                    </ul>
                                </td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td class="project-actions">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-title">
                                    <h6>InfiniO 4.2</h6>
                                    <small>Created 14 July, 2020</small>
                                </td>
                                <td>25 Sept, 2020</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
                                    </div>
                                    <small>Completion with: 48%</small>
                                </td>
                                <td><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                    </ul>
                                </td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td class="project-actions">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-title">
                                    <h6>Startup - OnePage Business Corporate Template</h6>
                                    <small>Created 14 July, 2020</small>
                                </td>
                                <td>26 Sept, 2020</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>
                                    </div>
                                    <small>Completion with: 56%</small>
                                </td>
                                <td><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar8.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                        <li><img src="{{ url('public') }}/assets-super-admin/images/xs/avatar9.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                    </ul>
                                </td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td class="project-actions">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
