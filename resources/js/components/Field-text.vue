<template>
  <div class="field">
    <label v-bind:for="for">{{ label }}</label>
    <input :type="{{ type }}" :placeholder="{{ placeholder }}" :value="{{ value }}" :name="{{ name }}">
  </div>
</template>

<script>

export default {
  props: [
    'for',
    'label',
    'type',
    'placeholder',
    'value',
    'name'
  ]
}

</script>

<style scoped>


</style>
