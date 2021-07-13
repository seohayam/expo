<template>
  <div class="card-like">
    <button type="button" v-if="status == false" @click.prevent="check()">
      <i class="far fa-heart"></i>
      <p>{{ count }}</p>
    </button>
    <button type="button" v-else @click.prevent="check()">
      <i class="fas fa-heart"></i>
      <p>{{ count }}</p>
    </button>
  </div>
</template>

<script>
export default {
  props: ["post", "version"],
  mounted() {
    console.log("これはらいくコンポーネントです");
    console.log(this.post);
    console.log(this.version);
  },

  // vue ないで使えるデータを持たせる
  data() {
    return {
      status: false,
      count: 0,
      // version: this.version,
    };
  },

  created() {
    this.firstCheck();
  },

  methods: {
    firstCheck() {
      axios
        .get("/like/" + this.version + "/" + this.post.id + "/firstCheck")
        .then((res) => {
          if (res.data[0] == 1) {
            this.status = true;
            this.count = res.data[1];
          } else {
            this.status = false;
            this.count = res.data[1];
          }
          console.log(res);
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    check() {
      axios
        .get("/like/" + this.version + "/" + this.post.id + "/check")
        .then((res) => {
          if (res.data[0] == 1) {
            this.status = true;
            this.count = res.data[1];
          } else {
            this.status = false;
            this.count = res.data[1];
          }
          console.log(res.data);
        })
        .catch(function(error) {
          console.log(error);
        });
    },
  },
};
</script>
