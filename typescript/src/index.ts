
/**
 * Tipos de datos en js
 * 
 * number
 * string
 * boolean
 * null
 * undefined
 * object
 * function
 */

console.log(typeof []);

/**
 * Tipos de datos en TypeScript
 * 
 * any
 * unknown
 * never
 * arrays
 * tuplas
 * Enums
 * 
 * Tipos inferidos
 */



let extincionDinosaurios: number = 76_000_000
let dinosaurioFavorito: string = "T-Rex"
let extintos: boolean = true

function chanchitoFeliz(config: any) {
    return config
}

// Arrys

let animales: string[] = ["vaca", "pato", "gato"]
let nums: number[] = [1, 2, 3, 4]
let checks: boolean[] = []
let nums2: Array<number> = []

// nums.map(x => x.) //el autocompletado sugiere metodos del tipo de dato

let tupla: [number, string[]] = [1, ['lucas', 'pepe']]

// tupla.push(12) //error de typescript


// Tipo de datos Enum


const chica = 's'
const mediana = 'm'
const grande = 'l'
const extragrande = 'xl'

//PascalCase

enum Talla { Chica = 's', Mediana = 'm', Grande = 'l', ExtraGrande = 'xl' }

const variable1 = Talla.Grande

console.log(variable1);


const enum LoadingState { Idle, Loading, Success, Error }

const estado = LoadingState.Success

//Objetos
type Direccion = {
    numero: number,
    calle: string,
    pais: string
}

type Persona = {
    readonly id: number,
    nombre?: string,
    talla: Talla,
    direccion: Direccion
}


const objeto: Persona = {
    id: 1,
    nombre: 'Mac',
    talla: Talla.Chica,
    direccion: {
        numero: 1,
        calle: 'ca',
        pais: 'bolivia'
    }
}
// objeto.id = 42
objeto.nombre = 'Hola Mundo'

const arr: Persona[] = []