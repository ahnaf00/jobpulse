<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Company</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="companyName">

                                <label class="form-label mt-3">Company Email </label>
                                <input type="text" class="form-control" id="companyEmail" disabled>

                                <label class="form-label mt-3">Company status</label>
                                <input type="text" class="form-control" id="companyStatus">

                                <input type="text" class="d-none" id="updateID">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="update-modal-close" class="btn bg-gradient-primary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="Update()" id="update-btn" class="btn bg-gradient-success" >Update</button>
            </div>
        </div>
    </div>
</div>


<script>

    async function FillUpdatedForm(id)
    {

        document.getElementById('updateID').value = id

        let response = await axios.post('/company/company-by-id', {
            id: id
        })

        document.getElementById('companyName').value = response.data[0]['name']
        document.getElementById('companyEmail').value = response.data[0]['email']
        document.getElementById('companyStatus').value = response.data[0]['status']
    }


    async function Update()
    {
        let name    = document.getElementById('companyName').value
        let email   = document.getElementById('companyEmail').value
        let status  = document.getElementById('companyStatus').value
        let id      = document.getElementById('updateID').value

        if(name.length == 0)
        {
            errorToast("Name is required")
        }
        else if (email.length == 0)
        {
            errorToast("Email is required")
        }
        else if(status.length == 0)
        {
            errorToast("Status is required")
        }
        else
        {
            document.getElementById('update-modal-close').click()
            let response = await axios.post('/company/update-company', {
                name:name,
                email:email,
                status:status,
                id:id
            })

            if(response.status == 200 && response.data == 1)
            {
                successToast("Update Successful")
                document.getElementById('update-form').reset()
                await getList()
            }
            else
            {
                errorToast("Request failed")
            }
        }

    }

</script>
