<template>
    <div>
        <div class="row">
            <div class="col-md-4">
                <h5 class="card-title fw-semibold mb-4">Card</h5>
                <div class="card">
                    <!--<img
                        src="../assets/images/products/s4.jpg"
                        class="card-img-top"
                        alt="..."
                    />-->
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title
                            and make up the bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="card-title fw-semibold mb-4">Header and footer</h5>
                <div class="card">
                    <div class="card-header">Featured</div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">
                            With supporting text below as a natural lead-in to
                            additional content.
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="card-title fw-semibold mb-4">
                    Titles, text, and links
                </h5>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Card subtitle
                        </h6>
                        <p class="card-text">
                            Some quick example text to build on the card title
                            and make up the bulk of the card's content.
                        </p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
        <header class="page-header">
            <h2>
                <a href="/dashboard"><i class="fa fa-list-alt"></i></a>
            </h2>
            <ol class="breadcrumbs">
                <li class="active"><span>Planessdsadas</span></li>
            </ol>
            <div class="right-wrapper pull-right">
                <button
                    type="button"
                    class="btn btn-custom btn-sm mt-2 mr-2"
                    @click.prevent="clickCreate()"
                >
                    <i class="fa fa-plus-circle"></i> Nuevo
                </button>
            </div>
        </header>

        <div class="pricing-table row no-gutters mt-3 mb-3">
            <template v-for="(row, index) in records">
                <div
                    :key="index"
                    class="col-lg-3 col-sm-6 text-center"
                    style="padding: 10px"
                >
                    <div class="plan most-popular">
                        <div class="plan-ribbon-wrapper"></div>
                        <h3>
                            {{ row.name }}<span>$/ {{ row.pricing }}</span>
                        </h3>
                        <ul>
                            <li v-if="row.limit_users === 0">
                                <strong>Usuarios</strong> ilimitados
                            </li>
                            <li v-else>
                                <strong>{{ row.limit_users }}</strong> usuarios
                            </li>

                            <li v-if="row.limit_documents === 0">
                                <strong>Comprobantes</strong> ilimitados
                            </li>
                            <li v-else>
                                <strong>{{ row.limit_documents }}</strong>
                                comprobantes
                            </li>

                            <li v-if="row.establishments_unlimited">
                                <strong>Establecimientos</strong> ilimitados
                            </li>
                            <li v-else>
                                <strong>{{ row.establishments_limit }}</strong>
                                establecimientos
                            </li>

                            <li v-if="row.sales_unlimited">
                                <strong>Ventas </strong> ilimitadas
                            </li>
                            <li v-else>
                                Total ventas mensuales
                                <strong> $/{{ row.sales_limit }}</strong>
                            </li>

                            <!-- <template v-for="(plan_document, i) in records">
                                        <li :key="i" v-if="plan_document">{{plan_document.description}}</li>
                                    </template>                                    -->
                        </ul>
                        <div v-if="!row.locked">
                            <button
                                type="button"
                                class="btn waves-effect waves-light btn-xs btn-danger float-right"
                                style="margin-left: 6px"
                                @click.prevent="clickDelete(row.id)"
                            >
                                <i class="fas fa-trash"></i>
                            </button>
                            <button
                                type="button"
                                class="btn waves-effect waves-light btn-xs btn-primary float-right"
                                @click.prevent="clickCreate(row.id)"
                            >
                                <i class="fas fa-edit"></i></button
                            ><br />
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <system-plans-form
            :showDialog.sync="showDialog"
            :plan_documents="plan_documents"
            :recordId="recordId"
        ></system-plans-form>
    </div>
</template>

<script>
import PlansForm from "./form.vue";
import { deletable } from "../../../mixins/deletable";

export default {
    mixins: [deletable],
    components: { PlansForm },
    data() {
        return {
            showDialog: false,
            resource: "plans",
            recordId: null,
            records: [],
            plan_documents: [],
            aux: [],
        };
    },
    created() {
        this.$eventHub.$on("reloadData", () => {
            this.getData();
        });
        this.getData();
        this.getPlanDocuments();
    },
    methods: {
        getPlanDocuments() {
            this.$http.get(`/${this.resource}/tables`).then((response) => {
                this.plan_documents = response.data.plan_documents;
            });
        },
        getData() {
            this.$http.get(`/${this.resource}/records`).then((response) => {
                this.records = response.data.data;
            });
        },
        getDescriptions(plan_documents) {
            let descriptions = [];
            Object.values(plan_documents).forEach((itm, i) => {
                descriptions.push(this.plan_documents[itm - 1]);
            });
            return descriptions;
        },
        clickCreate(recordId = null) {
            this.recordId = recordId;
            this.showDialog = true;
        },
        clickDelete(id) {
            this.destroy(`/${this.resource}/${id}`).then(() =>
                this.$eventHub.$emit("reloadData")
            );
        },
    },
};
</script>
