
                  <form class="needs-validation" action="{{ route('products.store')}}" method="POST" id="addProduct">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                      <!--begin::Row-->
                      <div class="row g-3">
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="name"
                            value=""
                            name="name"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">description</label>
                          <input
                            type="text"
                            class="form-control"
                            id="description"
                            name="description"
                            value=""
                           
                          />
                          <div class="valid-feedback">Looks good!</div>
                        <!--end::Col-->
                        <!--begin::Col-->
                       
                        <!--end::Col-->

                        <!--begin::Col-->
                        
                          <div class="invalid-feedback">Please provide a valid zip.</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button class="btn btn-info" type="submit">Ajouter</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->

    
