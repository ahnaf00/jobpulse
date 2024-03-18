<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Job</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Job title</label>
                                <input type="text" id="updateJobTitle" class="form-control">

                                <label class="form-label mt-3">Job Description</label>
                                <input type="text" id="updateJobDesc" class="form-control">

                                <label class="form-label mt-3">Job status</label>
                                <input type="text" class="form-control" id="updateJobStatus">

                                <input type="text" class="d-none" id="jobUpdateID">
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

        document.getElementById('jobUpdateID').value = id

        let response = await axios.post('/job-by-id', {
            id: id
        })

        document.getElementById('updateJobTitle').value   = response.data[0]['title']
        document.getElementById('updateJobDesc').value    = response.data[0]['description']
        document.getElementById('updateJobStatus').value  = response.data[0]['status']
    }


    async function Update()
    {
        let jobTitle        = document.getElementById('updateJobTitle').value
        let jobDesc         = document.getElementById('updateJobDesc').value
        let jobStatus       = document.getElementById('updateJobStatus').value
        let id              = document.getElementById('jobUpdateID').value

        console.log(jobTitle, jobDesc, jobStatus);
        if(jobTitle.length == 0)
        {
            errorToast("Job title is required")
        }
        else if (jobDesc.length == 0)
        {
            errorToast("Email is required")
        }
        else if(jobStatus.length == 0)
        {
            errorToast("Status is required")
        }
        else
        {
            document.getElementById('update-modal-close').click()
            let response = await axios.post('/update-job', {
                title       :   jobTitle,
                description :   jobDesc,
                status      :   jobStatus,
                id:id
            })

            if(response.status == 200 && response.data == 1)
            {
                successToast("Update Successful")
                document.getElementById('update-form').reset()
                await getJobList()
            }
            else
            {
                errorToast("Request failed")
            }
        }

    }




</script>
