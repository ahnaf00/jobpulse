<div class="modal animated zoomIn" id="delete-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h3 class=" mt-3 text-warning">Delete this Company ?</h3>
                <p class="mb-3">Once delete, you can't get it back.</p>
                <input class="d-none" id="deleteID"/>

            </div>
            <div class="modal-footer justify-content-end">
                <div>
                    <button type="button" id="delete-modal-close" class="btn mx-2 bg-gradient-primary" data-bs-dismiss="modal">Cancel</button>
                    <button onclick="Delete()" type="button" id="confirmDelete" class="btn  bg-gradient-danger" >Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    async function Delete()
    {
        let id  = document.getElementById('deleteID').value
        document.getElementById('delete-modal-close').click()


        let response = await axios.post('/company/delete-company', {
            id:id
        })

        if(response.status == 200 && response.data == 1)
        {
            successToast("Company Deleted")
            await getList()
        }
        else
        {
            errorToast("Request failed")
        }

    }
</script>
