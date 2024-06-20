<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

function emptyBody_01(): void {
    
}

function emptyBody_02(int $int): void {
    
}

function emptyBody_03(int $int): void
{
    
}

function emptyBody_04(
        int $int,
        string $string,
        ): void {
}

function emptyBody_05(
        int $int,
        string $string,
        ): void
{
}

function emptyBody_06(
        int $int,
        string $string,
        ): void {}

function emptyBody_07(): void {}

foreach ($array as $key => $value) {
    
}

for ($index = 0; $index < count($array); $index++) {
    
}

while (true) {
    
}

try {
    
} catch (Exception $exc) {
} finally {
}

class C {
    
}

class GH6716_1
{
	public function __construct(private int $x, private int $y)
	{
		
	}

    public function test01(): void {
        
    }

    public function test02(int $int, string $string) {
        
    }

    public function test03(int $int, string $string)
    {
        
    }

    public function test04(
            int $int,
            string $string,
    )
    {
    }

    public function test05(
            int $int,
            string $string,
    ){}

}

class GH6716_2
{
	public function __construct(
		public readonly int $x,
		public readonly int $y,
	) {
		
	}
}

// formatted
function emptyBody_formatted_01(): void {}

function emptyBody_formatted_02(int $int): void {}

function emptyBody_formatted_03(int $int): void {}

function emptyBody_formatted_04(
        int $int,
        string $string,
): void {}

function emptyBody_formatted_05(
        int $int,
        string $string,
): void {}

function emptyBody_formatted_06(
        int $int,
        string $string,
): void {}

function emptyBody_formatted_07(): void {}

class GH6716_1_formatted {

    public function __construct(private int $x, private int $y) {}

    public function test01(): void {}

    public function test02(int $int, string $string) {}

    public function test03(int $int, string $string) {}

    public function test04(
            int $int,
            string $string,
    ) {}

    public function test05(
            int $int,
            string $string,
    ) {}
}

class GH6716_2_formatted {

    public function __construct(
            public readonly int $x,
            public readonly int $y,
    ) {}
}