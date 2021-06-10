<template>
  <div>
    <button @click="alert">alert!</button>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    alert: function() {
      this.$swal({
        title: "alert for delete",
        text: "Is is sure?",
        icon: "warning",
        buttons: true,
        dangerMoed: true,
      }).then((willDelete) => {
        if (willDelete) {
          this.$swal("You pushed OK BTN.", { icon: "success" });
        } else {
          this.$swal("You Canceled.");
        }
      });
    },
  },
};
</script>
