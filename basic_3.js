function englishTime(input) {
    let date = new Date("1970-01-01 " + input);
    let format = date.toLocaleTimeString([], { hour12: false });
    return format;
}
console.log(englishTime("07:05:45 PM"));
