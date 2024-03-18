<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg mt-5">
    {{-- @include('backend.layouts.inc.navbar') --}}
    <div class="py-4 container">

        <div class="col-12 d-flex justify-content-center">
           <div class="col-6">
                <div class="px-4 card">
                    <div class="row ">
                        {{--  --}}
                        <div class="p-4 bg-white card-body">
                            <h4 class="font-weight-bolder text-center">Admin Login</h4>
                            <div class="multisteps-form__content">
                                <div class="mt-3">
                                    <div class="col-lg-12 col-sm-6">
                                        <label>Email</label>
                                        <input class="multisteps-form__input form-control" type="text" name="email" id="email"
                                            placeholder="Admin Email">
                                    </div>
                                    <div class="mt-3 col-lg-12 col-sm-6 mt-sm-0">
                                        <label>Password</label>
                                        <input class="multisteps-form__input form-control" type="password" name="password" id="password"
                                            placeholder="Type Password">
                                    </div>
                                </div>
                                <div class="mt-4 button-row">
                                    <button class="mb-0 text-white btn bg-dark ms-auto js-btn-next" type="button"
                                        onclick="Login()">Login</button>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                </div>
           </div>
        </div>
    </div>
</main>

<script>
    async function Login()
    {
        let email       = document.getElementById('email').value
        let password    = document.getElementById('password').value

        if(email.length  == 0)
        {
            errorToast("Email is required")
        }
        else if (password.length  == 0)
        {
            errorToast("Password is required")
        }
        else
        {
            let response  = await axios.post("/admin-login", {
                email:email,
                password:password
            })

            if(response.status  == 200 && response.data['status'] == 'success')
            {
                window.location.href = "{{ route('admin-dashboard') }}"
            }
            else
            {
                errorToast(response.data['message']);
            }
        }
    }
</script>
