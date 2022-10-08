<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

          <div class="col-lg-12 mb-4">
            <div class="card">
              <div class="d-flex align-items-end row">
                <div class="col-sm-6 offset-md-2">
                  <div class="card-body">
                    <h5 class="card-title text-primary">Upload Result </h5>
                    <form action="{{ route('result.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input
                              type="file"
                              name="file"
                              class="form-control"
                              id="inputGroupFile04"
                              aria-describedby="inputGroupFileAddon04"
                              aria-label="Upload"
                            />
                            <button class="btn btn-outline-primary" type="submit" id="inputGroupFileAddon04">Publish</button>
                          </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mb-4">
            <div class="card">
              <div class="d-flex align-items-end row">
                <div class="col-sm-6 offset-md-2">
                  <div class="card-body">
                    <h5 class="card-title text-primary">Upload Result Details </h5>
                    <form action="{{ route('student.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input
                              type="file"
                              name="file"
                              class="form-control"
                              id="inputGroupFile04"
                              aria-describedby="inputGroupFileAddon04"
                              aria-label="Upload"
                            />
                            <button class="btn btn-outline-primary" type="submit" id="inputGroupFileAddon04">Publish</button>
                          </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
</div>


{{-- Modal check result --}}
<div class="modal fade" id="checkResultModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Check Result here</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <form action="{{ route('checkResult') }}" method="POST">
        @csrf

      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="nameSmall" class="form-label">Student Class</label>
            <select id="student_class" name="student_class" class="form-select" style="border-radius: 0; border: 0.1rem solid rgb(105, 104, 104)" required>
              <option disabled selected>Select Option</option>
              <option value="SSS 3" {{ Auth::user()->student_class == "SSS 3" ? 'selected' : '' }}>SSS 3</option>
              <option value="SSS 2" {{ Auth::user()->student_class == "SSS 2" ? 'selected' : '' }}>SSS 2</option>
              <option value="SSS 1" {{ Auth::user()->student_class == "SSS 1" ? 'selected' : '' }}>SSS 1</option>
              <option value="JSS 3" {{ Auth::user()->student_class == "JSS 3" ? 'selected' : '' }}>JSS 3</option>
              <option value="JSS 2" {{ Auth::user()->student_class == "JSS 2" ? 'selected' : '' }}>JSS 2</option>
              <option value="JSS 1" {{ Auth::user()->student_class == "JSS 1" ? 'selected' : '' }}>JSS 1</option>
              <option value="Basic 5" {{ Auth::user()->student_class == "Basic 5" ? 'selected' : '' }}>Basic 5</option>
              <option value="Basic 4" {{ Auth::user()->student_class == "Basic 4" ? 'selected' : '' }}>Basic 4</option>
              <option value="Basic 3" {{ Auth::user()->student_class == "Basic 3" ? 'selected' : '' }}>Basic 3</option>
              <option value="Basic 2" {{ Auth::user()->student_class == "Basic 2" ? 'selected' : '' }}>Basic 2</option>
              <option value="Basic 1" {{ Auth::user()->student_class == "Basic 1" ? 'selected' : '' }}>Basic 1</option>
              <option value="Nursery 3" {{ Auth::user()->student_class == "Nursery 3" ? 'selected' : '' }}>Nursery 3</option>
              <option value="Nursery 2" {{ Auth::user()->student_class == "Nursery 2" ? 'selected' : '' }}>Nursery 2</option>
              <option value="Nursery 1" {{ Auth::user()->student_class == "Nursery 1" ? 'selected' : '' }}>Nursery 1</option>
              <option value="Pre Nursery" {{ Auth::user()->student_class == "Pre Nursery" ? 'selected' : '' }}>Pre Nursery</option>
              <option value="Creche" {{Auth::user()->student_classe == "Creche" ? 'selected' : '' }}>Creche</option>
            </select>
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-2">
            <label class="form-label" for="regNo">Registeration No.</label>
            <input type="text" class="form-control rounded-0 border border-success" name="reg_no" value="{{ Auth::user()->reg_no }}" id="regNo" placeholder="xxxx/xxx/xx" required />
          </div>

          <div class="col mb-2">
            <label class="form-label" for="regNo">Academic Session</label>
            <select id="session" name="session" class="form-select" style="border-radius: 0; border: 0.1rem solid rgb(105, 104, 104)" required>
              <option disabled selected>Select Option</option>
              <option  value="2021/2022" {{ Auth::user()->session == "2021/2022" ? 'selected' : '' }}>2021/2022</option>
              <option  value="2022/2023" {{ Auth::user()->session == "2022/2023" ? 'selected' : '' }}>2022/2023</option>
              <option  value="2023/2014" {{ Auth::user()->session == "2023/2014" ? 'selected' : '' }}>2023/2014</option>
              <option  value="2024/2025" {{ Auth::user()->session == "2024/2025" ? 'selected' : '' }}>2024/2025</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col mb-2">
            <label class="form-label" for="regNo">Accadamic Term</label>
            <select id="term" name="term" class="form-select" style="border-radius: 0; border: 0.1rem solid rgb(105, 104, 104)" required>
              <option disabled selected>Select Option</option>
              <option value="1">First Term</option>
              <option value="2">Second Term</option>
              <option value="3">Third Term</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Check result</button>
      </div>
    </form>
    </div>
  </div>
</div>


<!-- profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Profile update</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <form action="{{ route('update.profile', Auth::user()->id) }}" method="POST">
        @csrf
        @method('put')
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="nameSmall" class="form-label">Student Class</label>
            <select id="student_class" name="student_class" class="form-select" style="border-radius: 0; border: 0.1rem solid rgb(105, 104, 104)" required>
              <option disabled selected>Select Option</option>
              <option value="SSS 3" {{ Auth::user()->student_class == "SSS 3" ? 'selected' : '' }}>SSS 3</option>
              <option value="SSS 2" {{ Auth::user()->student_class == "SSS 2" ? 'selected' : '' }}>SSS 2</option>
              <option value="SSS 1" {{ Auth::user()->student_class == "SSS 1" ? 'selected' : '' }}>SSS 1</option>
              <option value="JSS 3" {{ Auth::user()->student_class == "JSS 3" ? 'selected' : '' }}>JSS 3</option>
              <option value="JSS 2" {{ Auth::user()->student_class == "JSS 2" ? 'selected' : '' }}>JSS 2</option>
              <option value="JSS 1" {{ Auth::user()->student_class == "JSS 1" ? 'selected' : '' }}>JSS 1</option>
              <option value="Basic 5" {{ Auth::user()->student_class == "Basic 5" ? 'selected' : '' }}>Basic 5</option>
              <option value="Basic 4" {{ Auth::user()->student_class == "Basic 4" ? 'selected' : '' }}>Basic 4</option>
              <option value="Basic 3" {{ Auth::user()->student_class == "Basic 3" ? 'selected' : '' }}>Basic 3</option>
              <option value="Basic 2" {{ Auth::user()->student_class == "Basic 2" ? 'selected' : '' }}>Basic 2</option>
              <option value="Basic 1" {{ Auth::user()->student_class == "Basic 1" ? 'selected' : '' }}>Basic 1</option>
              <option value="Nursery 3" {{ Auth::user()->student_class == "Nursery 3" ? 'selected' : '' }}>Nursery 3</option>
              <option value="Nursery 2" {{ Auth::user()->student_class == "Nursery 2" ? 'selected' : '' }}>Nursery 2</option>
              <option value="Nursery 1" {{ Auth::user()->student_class == "Nursery 1" ? 'selected' : '' }}>Nursery 1</option>
              <option value="Pre Nursery" {{ Auth::user()->student_class == "Pre Nursery" ? 'selected' : '' }}>Pre Nursery</option>
              <option value="Creche" {{Auth::user()->student_classe == "Creche" ? 'selected' : '' }}>Creche</option>
            </select>
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-2">
            <label class="form-label" for="regNo">Registeration No.</label>
            <input type="text" class="form-control rounded-0 border border-success" name="reg_no" value="{{ Auth::user()->reg_no }}" id="regNo" placeholder="xxxx/xxx/xx" required />
          </div>

          <div class="col mb-2">
            <label class="form-label" for="regNo">Academic Session</label>
            <select id="session" name="session" class="form-select" style="border-radius: 0; border: 0.1rem solid rgb(105, 104, 104)" required>
              <option disabled selected>Select Option</option>
              <option  value="2021/2022" {{ Auth::user()->session == "2021/2022" ? 'selected' : '' }}>2021/2022</option>
              <option  value="2022/2023" {{ Auth::user()->session == "2022/2023" ? 'selected' : '' }}>2022/2023</option>
              <option  value="2023/2014" {{ Auth::user()->session == "2023/2014" ? 'selected' : '' }}>2023/2014</option>
              <option  value="2024/2025" {{ Auth::user()->session == "2024/2025" ? 'selected' : '' }}>2024/2025</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Token Modal -->
<div class="modal fade" id="changeTokenModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Token validation</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <form action="{{ route('update.token', Auth::user()->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="modal-body">
          <div class="row">
            <div class="col mb-3">
              <label for="nameSmall" class="form-label">Result Pin</label>
              <input type="text" id="token" name="token" class="form-control" value="{{ Auth::user()->token }}" placeholder="Enter your token" required/>
            </div>
          </div>
          <div class="row">
            <div class="col mb-0">
              <label class="form-label" for="emailSmall">Email</label>
              <input type="email" class="form-control" id="emailSmall" value="{{ Auth::user()->email }}" />
            </div>
          
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button type="submit" class="btn btn-primary">Validate token</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Purchase notice Modal -->
<div class="modal fade" id="purchaseModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Online Purchase</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      
        <div class="modal-body">
          
          <p>
            Currently we are not selling tokens online, please visit the school premises to purchase your token, thank you.
          </p>


          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
              Close
            </button>
          </div>
          
      </div>
  </div>
</div>


</x-app-layout>
