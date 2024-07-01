<template>
  <div v-if="message" :class="`flash-message flash-message-${type}`" role="alert">
    {{ message }}
  </div>
</template>

<script>
export default {
  props: {
    type: {
      type: String,
      default: 'info',
    },
    message: {
      type: String,
      default: '',
    },
  },
};
</script>

<style scoped>
.flash-message {
  padding: 1rem;
  margin: 1rem 0;
  border-radius: 0.25rem;
  transition: all 0.3s ease-in-out;
}
.flash-message-info {
  background-color: #d1ecf1;
  color: #0c5460;
}
.flash-message-success {
  background-color: #d4edda;
  color: #155724;
}
.flash-message-warning {
  background-color: #fff3cd;
  color: #856404;
}
.flash-message-danger {
  background-color: #f8d7da;
  color: #721c24;
}
</style>