<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('backend.layouts.inc.navbar')
    <div class="py-4 container-fluid">
        <div class="px-4 card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table text-right">
                            <thead class="text-white bg-dark">
                                <tr>
                                    <th scope="col" class="rounded-start pe-2 text-start ps-2">Item</th>
                                    <th scope="col" class="pe-2">Qty</th>
                                    <th scope="col" class="pe-2" colspan="2">Rate</th>
                                    <th scope="col" class="rounded-end pe-2">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-sm text-dark text-start">Premium Support</td>
                                    <td class="text-sm text-dark ps-4">1</td>
                                    <td class="text-sm text-dark ps-4" colspan="2">$ 9.00</td>
                                    <td class="text-sm text-dark ps-4">$ 9.00</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

