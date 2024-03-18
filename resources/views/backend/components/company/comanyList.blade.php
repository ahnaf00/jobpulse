<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('backend.layouts.inc.navbar')
    <div class="py-4 container-fluid">
        <div class="px-4 card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive text-center">
                        <table class="table" id="tableData">
                            <thead class="text-white bg-dark">
                                <tr>
                                    <th scope="col" class="rounded-start pe-2 ps-2 text-center">Name</th>
                                    <th scope="col" class="pe-2 text-center">Email</th>
                                    <th scope="col" class="pe-2 text-center">Status</th>
                                    <th scope="col" class="rounded-end pe-2 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableList">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script>
    getList()
    async function getList()
    {
        let response = await axios.get("/company-list");

        let tableData = $("#tableData")
        let tableList = $("#tableList")

        tableData.DataTable().destroy()
        tableList.empty();

        response.data.forEach((item, index) => {
            let row = `
                <tr>
                    <td class="text-sm text-dark">${item['name']}</td>
                    <td class="text-sm text-dark ps-4">${item['email']}</td>
                    <td class="text-sm">
                        <span class="border badge border-radius-lg border-success opacity-7 text-success bg-success">${item['status']}</span>
                    </td>
                    <td>
                        <button data-id="${item['id']}" class="btn editBtn btn-sm btn-outline-success">Edit</button>
                        <button data-id="${item['id']}" class="btn deleteBtn btn-sm btn-outline-danger">Delete</button>
                    </td>
                </tr>
            `

            tableList.append(row)
        });

        $(".editBtn").on('click',async function(){
            let id = $(this).data('id')
            await FillUpdatedForm(id)
            $("#update-modal").modal("show");
        })


        $(".deleteBtn").on('click', function(){
            let id = $(this).data('id')
            $("#delete-modal").modal("show");
            $("#deleteID").val(id)
        })

        new DataTable("#tableData", {
            order:[[0, 'desc']],
            lengthMenu:[5, 10, 15, 20]
        })
    }
</script>
