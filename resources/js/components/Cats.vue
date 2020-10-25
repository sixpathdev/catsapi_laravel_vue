<template>
<div class="container mt-4 mt-lg-5">
    <div class="row">
        <div class="col-12 h3 text-center">Cat images</div>
        <div class="col-12 col-md-6 col-lg-3 border-none" v-for="catbreed in catbreeds" :key="catbreed.id">
            <div class="card card-body my-2">
                <img :src="catbreed.url" style="width:100%;height:240px;" />
                </div>
            </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            catbreeds: [],
        }
    },
    created(){
        this.fetchCats();
    },
    methods: {
        fetchCats() {
            fetch('/catsbybreed').then(res => res.json()).then(res => {
                this.catbreeds = res
        console.log(this.catbreeds)
            })
        }
    }
}
</script>