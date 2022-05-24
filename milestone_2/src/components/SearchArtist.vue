<template>
    <select class="form-select"
    :value="artistSelected"
    v-on:input="$emit('input', $event.target.value)"
    @change="$emit('selectChange', artistSelected)">
        <option value="" disabled selected>Scegli Artista</option>
        <option value="">All</option>
         <option value="bon jovi">Bon Jovi</option>
        <option value="queen">Queen</option>
        <option value="sting">Sting</option>
        <option value="steve gadd band">Steve Gadd Band</option>
        <option value="iron maiden">Iron Maiden</option>
        <option value="eric clapton">Eric Clapton</option>
        <option value="deep purple">Deep Purple</option>
        <option value="metallica">Metallica</option>
        <option value="dave weckl">Dave Weckl</option>
        <option value="michael jacjson">Michael Jacjson</option>
    </select>
</template>

<script>
export default {
name: 'SearchBox',
props: {
    artistSelected: String,
}
}
</script>

<style lang="scss" scoped>
select {
    max-width: 220px;
}
</style>