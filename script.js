const arrays = [] // Empty Arrays

arrays.push(1,2,3,4,5) // Add Arrays [1,2,3,4,5]
console.log(arrays) //Result -> [1,2,3,4,5] -> Length 5 (0,1,2,3,4) 

for(let i = 0; i < arrays.length; i++) {
    console.log(i)
    // Ressult ->
    // 0
    // 1
    // 2
    // 3
    // 4
    console.log(arrays[i])
    // Ressult ->
    // 1
    // 2
    // 3
    // 4
    // 5
}