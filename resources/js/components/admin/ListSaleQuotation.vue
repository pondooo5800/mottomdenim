<template>
<div>
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <div class="card card-custom gutter-b bg-transparent shadow-none border-0">
                                <div class="card-header align-items-center  border-bottom-dark px-0">
                                    <div class="card-title mb-0">
                                        <h3 class="card-label mb-0 font-weight-bold text-body">
                                            Sale Quotation List
                                        </h3>
                                    </div>
                                    <div class="icons d-flex">
                                        <router-link to="/admin/add-sale-quotation" class="btn ml-2 p-0 kt_notes_panel_toggle" data-toggle="tooltip" title="" data-placement="right" data-original-title="Check out more demos" v-if="$parent.permissions.includes('quotation-manage')">
                                            <span class="bg-secondary h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center  rounded-circle shadow-sm " v-on:click="
                                                        display_form = !display_form
                                                    ">
                                                <svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-plus white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                                                </svg>
                                            </span>
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <div class="card card-custom gutter-b bg-white border-0">
                                <div class="card-body">
                                    <div>
                                        <div class=" table-responsive" id="printableTable">
                                        
                                            <div id="sale_wrapper" class="dataTables_wrapper no-footer">

                                            <div class="dataTables_length" id="sale_length"><label>Show 
                                            <select name="sale_length" aria-controls="sale" class="" v-model="limit" v-on:change="fetchsale_quotations()">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="500">500</option>
                                            <option value="1000">1000</option>
                                            </select> entries</label></div>

                                            <div id="sale_filter" class="dataTables_filter">
                                                <!-- <label>Search:<input type="search" class="" placeholder="" aria-controls="sale" v-model="searchParameter" @keyup="fetchsale_quotations()"></label>
                                                 -->
                                                </div>
                                                <table id="sale" class="display dataTable no-footer" sale="grid">
                                                    <thead class="text-body">
                                                        <tr sale="row">
                                                            <th class="sorting" tabindex="0" aria-controls="sale" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending"  @click="sorting('id')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'id'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'id' ? 'sorting_desc' : 'sorting'">
                                                                Sale ID
                                                            </th>
                                                            
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action">
                                                                Sale Date
                                                            </th>

                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action">
                                                                Warehouse
                                                            </th>

                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action">
                                                               Customer
                                                            </th>
                                                            
                                                            
                                                            

                                                            <th class="sorting" tabindex="0" aria-controls="sale" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending"  @click="sorting('amount_paid')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'amount_paid'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'amount_paid' ? 'sorting_desc' : 'sorting'">
                                                                Products Amount
                                                            </th>
                                                            
                                                            <th class="sorting" tabindex="0" aria-controls="sale" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending"  @click="sorting('tax_amount')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'tax_amount'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'tax_amount' ? 'sorting_desc' : 'sorting'">
                                                                Tax
                                                            </th>

                                                            <th class="sorting" tabindex="0" aria-controls="sale" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending"  @click="sorting('discount')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'discount'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'discount' ? 'sorting_desc' : 'sorting'">
                                                                Discount
                                                            </th>
                                                            

                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action">
                                                                Total Amount
                                                            </th>
                                                            
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action">
                                                                View
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="kt-table-tbody text-dark">
                                                        <tr class="kt-table-row kt-table-row-level-0 odd" sale="row" v-for="sale in sale_quotations" v-bind:key="sale.id">
                                                            <td class="sorting_1">
                                                                <router-link :to="'/admin/sale-detail/'+sale.id">
                                                                    {{ sale.id }}
                                                                </router-link>
                                                            </td>
                                                            <td>
                                                                {{ sale.sale_date }}
                                                            </td>
                                                            <td>
                                                                {{ sale.warehouse != null ? sale.warehouse.warehouse_name :"" }}
                                                            </td>
                                                            <td>
                                                                {{ sale.customer != null ? sale.customer.customer_first_name+' '+sale.customer.customer_last_name :"" }}
                                                            </td>
                                                            
                                                            
                                                            <td>
                                                                {{ sale.due_amount }}
                                                            </td>
                                                            
                                                            
                                                            <td>
                                                                {{ sale.tax_amount }}
                                                            </td>
                                                            
                                                            <td>
                                                                {{ sale.discount }}
                                                            </td>
                                                            
                                                            <td>
                                                                {{ (+sale.due_amount + +sale.tax_amount - +sale.discount).toFixed(2) }}
                                                            </td>
                                                            <td >
                                                                <router-link :to="'/admin/sale-quotation-detail/'+sale.id">
                                                                    View
                                                                </router-link>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <ul class="pagination pagination-sm m-0 float-right">
                                                    <li v-bind:class="[{disabled: !pagination.prev_page_url}]"><a class="page-link" href="#" @click="fetchsale_quotations(pagination.prev_page_url)">Previous</a></li>

                                                    <li class="disabled"><a class="page-link text-dark" href="#">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a></li>

                                                    <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" href="#" @click="fetchsale_quotations(pagination.next_page_url)">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>
</template>

<script>
import ErrorHandling from "../../ErrorHandling";
export default {
    data() {
        return {
            display_form: 0,
            sale_quotations:[],
            searchParameter: '',
            sortBy: 'id',
            sortType: 'ASC',
            limit: 10,
            error_message: '',
            edit: false,
            actions: false,
            pagination: {},
            request_method: "",
            is_default: "0",
            token: [],
            errors: new ErrorHandling(),
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        };
    },

    methods: {
        fetchsale_quotations(page_url) {
            this.$parent.loading = true;
            let vm = this;
            page_url = page_url || "/api/admin/sale_quotation";
            var arr = page_url.split('?');
            
            if (arr.length > 1) {
                page_url += '&limit='+this.limit;
            }
            else{
                page_url += '?limit='+this.limit;
            }
            if(this.searchParameter != null){
                page_url += '&searchParameter='+this.searchParameter;
            }
            page_url += '&sortBy='+this.sortBy+'&sortType='+this.sortType;
            page_url +='&getDetail=1&getProduct=1&language_id=1&getProductCombinationDetail=1&language_id=1';

            var responseData = {};

            axios.get(page_url, this.token).then(res => {
                this.sale_quotations = res.data.data;
                vm.makePagination(res.data.meta, res.data.links);
            })
            .finally(() => (this.$parent.loading = false));
        },

        makePagination(meta, links) {
            let pagination = {
                current_page: meta.current_page,
                last_page: meta.last_page,
                next_page_url: links.next,
                prev_page_url: links.prev
            };

            this.pagination = pagination;
        },
        sorting(sortBy){
            this.sortBy = sortBy;
            this.sortType = this.sortType == 'asc' || this.sortType == 'ASC' ? this.sortType='desc' : this.sortType = 'asc';
            this.fetchsale_quotations();
        },
    },
    mounted() {
     
        var token = localStorage.getItem('token');
        this.token = {
            headers: {
                Authorization: `Bearer ${token}`
            }
        };
        this.fetchsale_quotations();
    },
    props: ['loading'],
};
</script>
