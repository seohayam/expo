<template>
  <!-- little-card-component -->
  <div class="card-little">
    <div class="card-little-img">
      <img v-if="img" :src="img" alt="" />
      <img
        v-if="img == undefined"
        src="https://res.cloudinary.com/delvmfnei/image/upload/v1621186998/1_eihryo.jpg"
        alt=""
      />
    </div>
    <div class="card-little-text">
      <h2>{{ title }}</h2>
      <p>値段：{{ value }} 円</p>
    </div>
    <div v-if="version == undefined" class="card-little-status">
      <i class="fas fa-exchange-alt"></i>
    </div>
    <LikeComponent
      v-if="version"
      :post="post"
      :version="version"
    ></LikeComponent>
  </div>
</template>

<script>
import LikeComponent from "./LikeComponent.vue";

export default {
  props: ["post"],
  mounted() {
    console.log("これは、カードです。");
    console.log(this.post);
    console.log(this.img);
  },
  components: {
    LikeComponent,
  },
  methods: {},
  data() {
    if (this.post.item_url) {
      return {
        version: "item",
        title: this.post.title,
        value: this.post.value,
        img: this.post.image_path,
        // img: this.post.item_url,
      };
    } else if (this.post.store_url) {
      return {
        version: "store",
        title: this.post.name,
        value: this.post.value,
        img: this.post.image_path,
        // img: this.post.store_url,
      };
    }
  },
  created() {},
};
</script>
