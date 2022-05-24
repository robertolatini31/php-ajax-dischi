<template>
    <select class="form-select"
    :value="genSelected"
    v-on:input="$emit('input', $event.target.value)"
    @change="$emit('selectChange', genSelected)">
        <option value="" disabled selected>Scegli Genere</option>
        <option value="">All</option>
        <option value="jazz">Jazz</option>
        <option value="metal">Metal</option>
        <option value="pop">Pop</option>
        <option value="rock">Rock</option>
    </select>
</template>

<script>
export default {
name: 'SearchBox',
props: {
    genSelected: String,
}
}
</script>

<style lang="scss" scoped>
select {
    max-width: 220px;
}
</style>