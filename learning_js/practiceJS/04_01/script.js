/**
 * Use template literals to output HTML
 * @link https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals
 *
 */


import Backpack  from "./backpack";

const everydayPack = new Backpack (
    "Everyday Backpack",
    30,
    "grey",
    15,
    26,
    26,
    false,
    "December 5, 2018 15:00:00 PST"

);

console.log ("everyday backpack :" , everydayPack);
console.log ("everyday backpack:", everydayPack.pocketNum);
console.log ("everyday backpack :", everydayPack.backpackAge());