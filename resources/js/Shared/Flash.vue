<template>
  <div>
    <div v-if="$page.flash.success && show">
      <p class="success" v-html="$page.flash.success" />
    </div>
    <div v-else-if="$page.flash.error && show">
      <p class="error" v-html="$page.flash.error" />
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      timeout: null,
      ttl: 5,
      show: true,
    }
  },
  watch: {
    '$page.flash': {
      handler() {
        this.show = true

        this.ttl = this.$page.flash.ttl ?? this.ttl

        this.flash()
      },
      deep: true,
      immediate: true,
    },
  },
  methods: {
    flash() {
      clearTimeout(this.timeout)

      // this.timeout = null

      this.timeout = setTimeout(() => {
        this.show = false
      }, this.ttl * 1000)
    },
  },
}
</script>
