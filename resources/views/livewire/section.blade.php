<div class="container-fluid">
    <div class="row">
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#addSection" class="btn btn-primary" data-toggle="modal">
                                <i class="fa fa-plus-circle "></i> ADD SECTION</a>
                           </div>
                      </div>
                  </div>
              <div class="card-body">
         @include('sections.table')
                </div>
            </div>
        </div>
    </div>
      @include('sections.create')
</div>
